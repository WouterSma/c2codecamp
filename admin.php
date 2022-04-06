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

    <?php if(!isset($_SESSION['role']))
    {
        die("Only admins may view this page!");
    }
    elseif(!$_SESSION['role'] == "admin")
    {
        die("Only admins may view this page!");
    }
    ?>
    
    <?php
        require_once 'backend/conn.php';
        $query = "SELECT * FROM users";
        $statement = $conn->prepare($query);
        $statement->execute();
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div class="users">
    <?php foreach($users as $user): ?>
        <div class="user">
            <p><?php echo $user['name']; ?></p>
            <p><?php echo $user['role']; ?></p>
        </div>
    <?php endforeach; ?>
    </div>
</body>