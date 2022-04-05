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
<body class="lukeskywalker">

   <?php require_once "../header.php"; ?>

        <div class="information">
            <p>
            Luke Skywalker is een personage uit de Star Warssaga, gespeeld door acteur Mark Hamill. 
            Luke is de tweelingbroer van prinses Leia. Hun ouders zijn Padmé Amidala en Anakin Skywalker. 
            Skywalker werd opgevoed door zijn oom Owen Lars en tante Beru Whitesun Lars
            </p>
            <img src="<?php echo $base_url ?>/img/luke.png" alt="Luke Skywalker">

        </div>

</body>
</html>