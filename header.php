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
                        <a href="<?php echo $base_url ?>/muziek/bohemian.php">Bohemian Rhapsody ~ Queen</a>
                        <a href="<?php echo $base_url ?>/muziek/champions.php">We Are The Champions ~ Queen</a>
                        <a href="<?php echo $base_url ?>/muziek/killer.php"> Killer Queen ~ Queen</a>
                        <a href="<?php echo $base_url ?>/muziek/uprisingbaby.php">Uprising ~ My Baby</a>
                        <a href="<?php echo $base_url ?>/muziek/uprisingmuse.php">Uprising ~ Muse</a>
                        <a href="<?php echo $base_url ?>/muziek/plugbaby.php">Plug In ~ Muse</a>
                        <a href="<?php echo $base_url ?>/muziek/transylvia.php">Transylvia ~ Iron Maiden</a>
                        <a href="<?php echo $base_url ?>/muziek/madness.php">Madness ~ Muse</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a class="dropdown_button" href="<?php echo $base_url ?>/informatie/informatie.php">informatie</a>
                    <div class="dropdown_content">
                        <a href="<?php echo $base_url ?>/informatie/links.php">Links</a>
                        <a href="<?php echo $base_url ?>/informatie/timothydalton.php">Timothy Dalton</a>
                        <a href="<?php echo $base_url ?>/informatie/rogermoore.php">Roger Moore</a>
                        <a href="<?php echo $base_url ?>/informatie/darthvader.php">Darth Vader</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a class="dropdown_button" href="<?php echo $base_url ?>/tools/tool.php">tools</a>
                    <div class="dropdown_content">
                        <a href="<?php echo $base_url ?>/tools/hamers.php">Hamers</a>
                        <a href="<?php echo $base_url ?>/tools/kettingzagen.php">Kettingzagen</a>
                        <a href="<?php echo $base_url ?>/tools/cirkelzagen.php">Cirkelzagen</a>
                    </div>
                </div>

                <div class="dropdown">
                    <a class="dropdown_button" href="<?php echo $base_url ?>/tool.php">dranken</a>
                    <div class="dropdown_content_double">
                        <div class="subdropdown">
                            <a class="dropdown_subbutton" href="<?php echo $base_url ?>">warm</a>
                            <div class="dropdown_subcontent">
                                <a href="">test</a>
                                <a href="">test</a>
                                <a href="">test</a>
                            </div>
                        </div>
                        <div class="subdropdown">
                            <a class="dropdown_subbutton" href="<?php echo $base_url ?>">koud</a>
                            <div class="dropdown_subcontent">
                                <a href="">test2</a>
                                <a href="">test2</a>
                                <a href="">test2</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown">
                    <a class="dropdown_button" href="<?php echo $base_url ?>/tweeter/index.php">Tweeter</a>
                </div>
                <div class="dropdown">
                <?php if(isset($_SESSION['user_id'])):?>
                    <a class="dropdown_button" href="<?php echo $base_url; ?>/logout.php">Logout</a>
                <?php else: ?>
                    <a class="dropdown_button" href="<?php echo $base_url; ?>/login.php">Login</a>
                <?php endif ?>
                </div>
                
                <div class="dropdown">
                    <a class="dropdown_button" href="<?php echo $base_url; ?>/logout.php">Logout</a>
            </div>

       </nav>
</header>