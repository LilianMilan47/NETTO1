<?php
session_start();
if (!isset($_SESSION['user']['ID'])) {
    header('Location: authentification.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mentions légales</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <?php
        include 'header.php';
        ?>

        <main class="centrer">
            <h1>MENTIONS LÉGALES</h1>
        </main>

        <?php
        include 'footer.php';
        ?>

    </body>
</html>