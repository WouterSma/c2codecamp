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
    <div class="container">
        <form action="../backend/musicController.php" method="POST">
            <input type="hidden" name="action" value="create">
            <div class="form-group">
                <label for="artist">Artiest:</label>
                <input type="text" name="artist" id="artist" class="form-input">
            </div>
            <div class="form-group">
                <label for="title">Titel: </label>
                <input type="text" name="title" id="title" class="form-input">
            </div>
            <div class="form-group">
                <label for="songtext">Songtext: </label>
                <textarea name="songtext" rows="4">...</textarea>
            </div>
            <input type="submit" value="Post Song">
        </form>
    </div>
    
</body>