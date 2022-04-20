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
        if(empty($_SESSION['role']) || $_SESSION['role'] != "admin"){
            die("You have too be an admin too post a book!");
        }
    ?>
    <div class="container">
        <form action="../backend/bookController.php" method="POST">
            <input type="hidden" name="action" value="create">
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
    </div>
    
</body>