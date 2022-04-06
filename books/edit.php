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

<body>
    <?php require_once "../header.php"; ?>
    <?php
        if(!$_SESSION['role'] == "admin"){
            die("You have too be an admin too edit a book!");
        }
    ?>
    <?php 
    $id = $_GET['id'];
    require_once "../backend/conn.php";
    $query = "SELECT * FROM books WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":id"=>$id
    ]);
    $book = $statement->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="container">
        <form action="../backend/bookController.php" method="POST">
            <input type="hidden" name="action" value="edit">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-input">
            </div>
            <div class="form-group">
                <label for="author">Author: </label>
                <input type="text" name="author" id="author" class="form-input">
            </div>
            <div class="form-group">
                <label for="num_pages">Number of pages: </label>
                <input type="num_pages" name="num_pages" id="num_pagesw" class="form-input">
            </div>
            <input type="submit" value="Post book">
        </form>
        <form action="../backend/bookController.php" method="POST">
            <input type="hidden" name="action" value="delete">
            <input type="hidden" name="id" value="<?php echo $book['id'] ?>">
            <input type="submit" value="delete book">
        </form>
        
    </div>
        
</body>