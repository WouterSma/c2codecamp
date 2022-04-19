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
        if(empty($_SESSION['user_id']) || $_SESSION['role'] != "sales_manager"){
            die("You have too be a sales manager too edit the price of a book!");
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
            <input type="hidden" name="action" value="edit_price">
            <input type="hidden" name="id" value="<?php echo $book['id'] ?>">
            <div class="form-group">
                <label for="price">Price: </label>
                <input type="price" name="price" id="price" class="form-input">
            </div>
            <input type="submit" value="Post price">
        </form>
    </div>
</body>