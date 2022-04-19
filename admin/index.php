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

    <?php if(!isset($_SESSION['role']) || $_SESSION['role'] != "admin")
    {
        die("Only admins may view this page!");
    }
    ?>
    
    <?php
        require_once '../backend/conn.php';
        $query = "SELECT * FROM users";
        $statement = $conn->prepare($query);
        $statement->execute();
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <table class="users">
            <tr class="first-line">
                <th>Name</th>
                <th>Role</th>
                <th>Edit</th>
            </tr>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['role']; ?></td>
                <td><a href='edit.php?id=<?php echo $user['id']; ?>'>edit</a></td>
            </tr>
            <?php endforeach;?>
        </table>
</body>