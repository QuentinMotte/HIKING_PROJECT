<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <title>HIKING THE WORLD</title>
</head>

<body>
    <header>
        <section class="header_section">
            <span class="border_logo_top"></span>
            <div class="logo_block">

                <a href="index.php?nickname=<?= $_SESSION["nickname"] ?>"><img src="img/banniere.png" alt="logo-hiking-the-world"></a>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="index.php?nickname=<?= $_SESSION["nickname"] ?>">Home</a>
                    </li>
                    <?php
                    if (isset($_SESSION["nickname"])) { ?>
                        <li><a href="index.php?action=profil&nickname=<?= $_SESSION["nickname"] ?>">Profil</a></li><?php
                    } else {
                        echo '<li><a href="index.php?action=register">Subscription</a></li>';
                    }                                                                                       ?>
                    <?php
                    if (isset($_SESSION["nickname"])) {
                        echo '<li><a href="index.php?action=logout">Logout</a></li>';
                    } else {
                        echo '<li><a href="index.php?action=login">Login</a></li>';
                    }
                    ?>
                    <?php
                    if (isset($_SESSION["nickname"])) {
                        echo '<li><a href="index.php?action=createhikes">Create hikes</a></li>';
                    }
                    ?>
                </ul>
            </nav>
            <span class="border_logo_bottom"></span>
        </section>
    </header>