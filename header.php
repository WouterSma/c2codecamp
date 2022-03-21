    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@1,600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/style.css">
    <title>C2CodeCamp</title>
    <?php require_once "backend/config.php" ?>
<header>
       <nav>
            <img src="<?php echo $base_url ?>/img/logo.png" alt="logo CodeCamp">
            <div class="nav_links">
                <div class="dropdown">
                    <a class="dropdown_button" href="<?php echo $base_url ?>/index.php">Home</a>
                </div>
                <div class="dropdown">
                    <a class="dropdown_button" href="<?php echo $base_url ?>/muziek/muziek.php">Muziek</a>
                    <div class="dropdown_content">
                        <a href="<?php echo $base_url ?>/muziek/bohemian.php">Bohemian Rhapsody</a>
                        <a href="<?php echo $base_url ?>">muziek enzo</a>
                        <a href="<?php echo $base_url ?>">muziek enzo</a>
                        <a href="<?php echo $base_url ?>">muziek enzo</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a class="dropdown_button" href="<?php echo $base_url ?>/informatie.php">informatie</a>
                    <div class="dropdown_content">
                        <a href="<?php echo $base_url ?>">info enzo</a>
                        <a href="<?php echo $base_url ?>">info enzo</a>
                        <a href="<?php echo $base_url ?>">info enzo</a>
                        <a href="<?php echo $base_url ?>">info enzo</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a class="dropdown_button" href="<?php echo $base_url ?>/tool.php">tools</a>
                    <div class="dropdown_content">
                        <a href="<?php echo $base_url ?>">tools enzo</a>
                        <a href="<?php echo $base_url ?>">tools enzo</a>
                        <a href="<?php echo $base_url ?>">tools enzo</a>
                        <a href="<?php echo $base_url ?>">tools enzo</a>
                    </div>
                </div>
            </div>
       </nav>
</header>