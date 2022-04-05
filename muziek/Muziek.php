<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CodeCamp</title>
</head>
<?php 
    require_once '../backend/conn.php';
    $query = "SELECT * FROM music";
    $statement = $conn->prepare($query);
    $statement->execute();
    $songs = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
    <?php require_once("../header.php") ?>
    <div class="books">
    <a href="create.php" class="dropdown_button">Post a song</a>
        <?php foreach($songs as $song): ?>
        <div class="book">
            <h3><?php echo $song['title'] ?></h3>
            <h4>By: <?php echo $song['artist'] ?></h4>
            <p><?php echo $song['songtext']?></p>
            <a href="edit.php?id=<?php echo $song['id'] ?>">edit</a>
        </div>
        <?php endforeach; ?>
    </div>
    <?php require_once"../footer.php"?>

    
</body>
</html>