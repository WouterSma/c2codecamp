<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CodeCamp</title>
</head>
<?php
        session_start();
        if(isset($_SESSION['user_id']))
        {
            require_once 'backend/config.php';
            $msg = "Je bent al ingelogd!";
            header("location: $base_url/index.php?msg=$msg");
            exit;
        }
?>

<?php require_once "header.php"; ?>


<body>
<?php require_once 'header.php'; ?>

<div class="container home">
    <?php  
        if(isset($_GET['msg']))
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        }
    ?>
    <form action="backend/loginController.php" method="POST">
        <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <input type="hidden" name="action" value="login">
        <input type="submit" value="Login" name="login">
    </form>
    <form action="backend/loginController.php" method="POST">
        <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <input type="hidden" name="action" value="create">
        <input type="submit" value="create">
    </form>
</div>

</body>

</html>