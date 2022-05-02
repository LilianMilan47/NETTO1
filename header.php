<header>
    <img class="logoNetto" src="Images/logoNetto.png">
    <nav>
        <ul>
            <li><a href="index.php"> <img class="logoAccueil" src="Images/logoAccueil.png"> </a></li>
            <li><option class="texte" value="nomPrenom"><?= $_SESSION['user']['NOM'] . ' ' . $_SESSION['user']['PRENOM'] ?></option></li>
            <li class="bouton"><a href="index.php?deconnexion=oui">Déconnexion</a></li>
        </ul>
    </nav>
</header>