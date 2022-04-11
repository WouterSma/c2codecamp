<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>CodeCamp</title>
</head>
<?php 
    require_once '../backend/conn.php';
    $query = "SELECT * FROM books";
    $statement = $conn->prepare($query);
    $statement->execute();
    $books = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
    <?php require_once "../header.php"; ?>
    
    <div class="books">
    <a href="create.php" class="dropdown_button">Post a book</a>
        <?php foreach($books as $book): ?>
        <div class="book">
            <h3><?php echo $book['title'] ?></h3>
            <h4>By: <?php echo $book['author'] ?></h4>
            <p>Pages: <?php echo $book['num_pages'] ?></p>
            <p>Price: <?php echo $book['price'] ?></p>
            <a href="editPrice.php?id=<?php echo $book['id'] ?>">edit price</a>
            <a href="edit.php?id=<?php echo $book['id'] ?>">edit</a>
            
            <?php if(!empty($_SESSION['user_id'])): ?>
            <form action="../backend/bookController.php" method="POST">
                <?php
                    $user_id = $_SESSION['user_id'];
                    require_once '../backend/conn.php';
                    $query = "SELECT user_id FROM liked_books WHERE (user_id = :user_id AND book_id = :book_id)";
                    $statement = $conn->prepare($query);
                    $statement->execute([
                        ":book_id"=>$book['id'],
                        ":user_id"=>$user_id
                    ]);
                    $liked_book = $statement->fetchAll(PDO::FETCH_ASSOC);

                    if(empty($liked_book)):
                ?>
                <input type="hidden" name="action" id="action" value="like">
                <input type="hidden" name="book_id" id="book_id" value="<?php echo $book['id']; ?>">
                <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                <input type="image" src="../img/like.png" alt="like button" name="submit">
                <?php else: ?>
            
                <input type="hidden" name="action" id="action" value="unlike">
                <input type="hidden" name="book_id" id="book_id" value="<?php echo $book['id']; ?>">
                <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                <input type="image" src="../img/liked.png" alt="liked button" name="submit">
                <?php endif; ?>
            </form>
            <?php endif; ?>
            <p>
                likes: 
                <?php
                    require_once '../backend/conn.php';
                    $query = "SELECT * FROM liked_books WHERE (book_id = :book_id)";
                    $statement = $conn->prepare($query);
                    $statement->execute([
                        ":book_id" => $book['id']
                    ]);
                    $likes = $statement->fetchAll(PDO::FETCH_ASSOC);
                
                    $amount_likes = count($likes);
                    echo $amount_likes;
                ?>
            </p>
        </div>
        <?php endforeach; ?>
    </div>
</body>