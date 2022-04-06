<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CodeCamp</title>
</head>

<body>
        <?php require_once "header.php"; ?>
        <?php if(isset($_SESSION['user_id'])):?>
            <?php if(!$_SESSION['role'] == "admin")
            {
                die("Only admins may view this page!");
            }
            ?>
        <?php endif; ?>
</body>