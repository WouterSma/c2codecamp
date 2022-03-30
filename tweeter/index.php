<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<?php require_once "../header.php" ?>
<body>
    <div class="twits">
        

        <?php
            require_once '../backend/conn.php';
            $query = "SELECT * FROM twits";
            $statement = $conn->prepare($query);
            $statement->execute();
            $twits = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>
        
        <?php foreach ($twits as $twit): ?>
            <?php 
                $query = "SELECT * FROM comments WHERE twit_id = :id";
                $statement = $conn->prepare($query);
                $statement->execute([":id" => $twit['id']]);
                $comments = $statement->fetchAll(PDO::FETCH_ASSOC);    
            ?>
        <div class="twit">
            <h3><?php echo $twit['title'] ?></h3>
            <p><?php echo $twit['message'] ?></p>
            <h4><?php echo $twit['user'] ?></h4>
            <a href="comment.php?id=<?php echo $twit['id'] ?>">comment</a>
            <div class="comments">
                <?php foreach ($comments as $comment): ?>
                <div class="comment">
                    <h4><?php echo $comment['user'] ?></h4>
                    <p><?php echo $comment['comment'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
        <a href="create.php" class="dropdown_button">Make your own twit!</a>
    </div>
</body>
