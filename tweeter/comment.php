<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php if(empty($_SESSION['username'])){
    die("You have too be logged in too comment!");
} ?>
<?php require_once "../header.php" ?>

<body>
        <div class="container">
            <?php $twit_id = $_GET['id']; ?>
            <form action="../backend/twitController.php?id=<?php echo $twit_id; ?>" method="POST">
            <input type="hidden" name="action" value="comment">
            <input type="hidden" name="user" id="user" value="<?php echo $_SESSION['username'] ?>">
            <div class="form-group">
                <label for="comment">Comment: </label>
                <textarea name="comment" id="comment" class="form-input" rows="4"></textarea>
            </div>
            <input type="submit" value="Post comment">
        </form>
        </div>
        
</body>