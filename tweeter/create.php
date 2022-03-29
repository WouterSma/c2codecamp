<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php require_once "../header.php" ?>
<body>
        <div class="container">
            <form action="../backend/twitController.php" method="POST">
            <input type="hidden" name="action" value="create">
            <input type="hidden" name="user" id="user" value="<?php echo $_SESSION['username'] ?>">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-input">
            </div>
            <div class="form-group">
                <label for="twit">Twit: </label>
                <textarea name="twit" id="twit" class="form-input" rows="4"></textarea>
            </div>
            <input type="submit" value="Post twit">

        </form>
        </div>
        
</body>