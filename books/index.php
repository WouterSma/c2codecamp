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
            <a href="edit.php?id=<?php echo $book['id'] ?>">edit</a>
        </div>
        <?php endforeach; ?>
    </div>
</body>