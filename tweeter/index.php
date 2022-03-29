<!DOCTYPE html>
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
        <div class="twit">
            <h3><?php echo $twit['title'] ?></h3>
            <p><?php echo $twit['message'] ?></p>
            <h4><?php echo $twit['user'] ?></h4>
        </div>
        <?php endforeach; ?>
        <a href="create.php" class="dropdown_button">Make your own twit!</a>
    </div>
</body>
