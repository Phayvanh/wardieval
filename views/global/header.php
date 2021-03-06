<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wardieval, jeu gratuit de stratègie médiévale</title>
    <meta name="author" content="ad-creatif">
    <meta name="langage" content="Fr-fr">

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href='https://fonts.googleapis.com/css?family=Almendra:400,700|UnifrakturMaguntia|Astloch:700'
          rel='stylesheet' type='text/css'>
    <link href="<?php echo _ROOT_CSS_ ?>style.css" rel="stylesheet">
    <link href="<?php echo _ROOT_CSS_ ?>jquery-impromptu.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="<?php echo _ROOT_JS_ ?>jquery.countdown.min.js"></script>
    <script src="<?php echo _ROOT_JS_ ?>jquery-impromptu.min.js"></script>

    <?php if(User::isLoggued()){ ?>
        <script>
            var ressources = <?php echo $user->ressources ?>;
        </script>
        <script src="<?php echo _ROOT_JS_ ?>global.js"></script>
    <?php } ?>
</head>

<body>
<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4 sm-full"><a href="<?php echo _ROOT_ ?>"
                                          title="Wardieval, jeu gratuit de stratègie médiévale"><img
                        src="<?php echo _ROOT_IMG_ ?>logo.png"></a></div>
            <nav class="col-6 sm-full">
                <ul>
                    <li><a class="btn-wood" href="<?php echo _ROOT_ ?>">Accueil</a></li>
                    <?php if (User::isLoggued()) { ?>
                        <li><a class="btn-wood" href="<?php echo _ROOT_ ?>empire">Mon Empire</a></li>
                        <li><a class="btn-wood" href="<?php echo _ROOT_ ?>war">Guerre</a></li>
                    <?php } else { ?>
                        <li><a class="btn-wood" href="<?php echo _ROOT_ ?>register">Inscription</a></li>
                    <?php } ?>
                </ul>
            </nav>
            <div class="col-2 user-infos sm-inline">
                <?php if(User::isLoggued()){ ?>
                    <ul>
                        <li>Score : <?php echo $user->score ?></li>
                        <li><i class="icon dollar"></i><span id="js-ressources"><?php echo $user->ressources ?></span>
                        </li>
                        <li><?php echo $user->pseudo ?> <a href="<?php echo _ROOT_ ?>home/logout">déconnexion</a></li>
                    </ul>
                <?php } else { ?>
                    <form id="login" action="<?php echo _ROOT_ ?>home/login" method="post">
                        <input type="text" name="pseudo" placeholder="pseudo">
                        <input type="password" name="pass" placeholder="mot de passe">
                        <input type="submit" name="submit" value="login">
                    </form>
                <?php } ?>
            </div>
        </div>
        </div>
    </header>
    <?php
    if (!empty($errors)){
        echo '<section class="container"><ul class="alert alert-error col-12">';
        foreach ($errors as $error)
            echo '<li>'.$error.'</li>';
        echo '</ul></section>';
    }
    ?>

