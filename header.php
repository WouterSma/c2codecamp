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
                    <a class="dropdown_button" href="#">Muziek</a>
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
                        <a href="<?php echo $base_url ?>/informatie/lukeskywalker.php">Luke Skywalker</a>
                        <a href="<?php echo $base_url ?>/informatie/clooney.php">George Clooney</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a class="dropdown_button" href="<?php echo $base_url ?>/tools/tool.php">tools</a>
                    <div class="dropdown_content">
                        <a href="<?php echo $base_url ?>/tools/hamers.php">Hamers</a>
                        <a href="<?php echo $base_url ?>/tools/schroevendraaiers.php">Schroevendraaiers</a>
                        <div class="subdropdown">
                            <a class="dropdown_subbutton" href="<?php echo $base_url ?>">Zagen</a>
                            <div class="dropdown_subcontent">
                                <a href="<?php echo $base_url ?>/tools/kettingzagen.php">kettingzagen</a>
                                <a href="<?php echo $base_url ?>/tools/cirkelzagen.php">cirkelzagen</a>
                                <a href="<?php echo $base_url ?>/tools/schroevendraaiers.php">handzagen</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown">
                    <a class="dropdown_button" href="<?php echo $base_url ?>/tool.php">dranken</a>
                    <div class="dropdown_content_double">
                        <div class="subdropdown">
                            <a class="dropdown_subbutton" href="<?php echo $base_url ?>">warm</a>
                            <div class="dropdown_subcontent">
                                <a href="<?php echo $base_url ?>/dranken/koffie.php">Koffie</a>
                                <a href="<?php echo $base_url ?>/dranken/latte.php">Latte</a>
                                <a href="<?php echo $base_url ?>/dranken/thee.php">Thee</a>
                            </div>
                        </div>
                        <div class="subdropdown">
                            <a class="dropdown_subbutton" href="<?php echo $base_url ?>">koud</a>
                            <div class="dropdown_subcontent">
                                    <a href="<?php echo $base_url ?>/dranken/frisdranken.php">frisdrank</a>
                                    <a href="">test2</a>
                                    <a href="">test2</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown">
                    <a class="dropdown_button" href="<?php echo $base_url ?>/books/index.php">books</a>
                </div>

                <div class="dropdown">
                    <a class="dropdown_button" href="<?php echo $base_url ?>/tweeter/index.php">Tweeter</a>
                </div>

                <?php if(isset($_SESSION['user_id'])):?>
                <?php if($_SESSION['role'] == "admin"):?>
                <div class="dropdown">
                    <a class="dropdown_button" href="<?php echo $base_url ?>/admin/index.php">Manage accounts</a>
                </div>
                <?php endif ?>
                <?php endif ?>
                <div class="dropdown">
                <?php if(isset($_SESSION['user_id'])):?>
                    <a class="dropdown_button" href="<?php echo $base_url; ?>/logout.php">Logout</a>
                <?php else: ?>
                    <a class="dropdown_button" href="<?php echo $base_url; ?>/login.php">Login</a>
                <?php endif ?>
                </div>
       </nav>
</header>