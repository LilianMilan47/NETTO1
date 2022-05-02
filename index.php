<?php
session_start();
if (!isset($_SESSION['user']['ID'])) {
    header('Location: authentification.php');
}
if (isset($_GET['deconnexion'])) {
    if ($_GET['deconnexion'] == 'oui') {
        $_SESSION = [];
        session_destroy();
        header('Location: authentification.php');
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <?php
        include 'header.php';
        ?>
        <main class="centrerElement">
            <ul>
                <?php
                if ($_SESSION['user']['ADMIN'] == 1) {
                    echo '<li class="bouton"><a href="ajoutvehicule.php"> Ajout de véhicule </a></li>';
                }
                ?>
                <li class="bouton"><a href="vehicules.php"> Liste des véhicules </a></li>
            </ul>
        </main>

        <?php
        include 'footer.php';
        ?>

    </body>
</html>