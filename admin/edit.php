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
        <form action="../backend/loginController.php" method="POST">
            <div class="form-group">
                <input type="hidden" name="action" id="action" value="edit">
                <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">
                <label for="role">Role:</label>
                <select name="role" id="role">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                    <option value="sales_manager">Sales manager</option>
                    <option value="content_leverancier">Content leverancier</option>
                </select>
                <input type="submit" value="Save">
            </div>
        </form>
        <form action="../backend/loginController.php" method="POST">
            <input type="hidden" name="action" value="delete">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <input type="submit" value="delete user">
        </form>
    </div>

</body>