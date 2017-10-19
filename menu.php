<?php


session_start();
echo @$_SESSION ["loginUtilConnecte"];


if ( isset($_SESSION["loginUtilConnecte"])) : ?>
<a href="Logout.php" > Deconnexion</a><br>
 <?php else : ?>

<a href="Login.php" > Connexion</a><br>
<?php endif; ?>

<a href="ListeFilm.php" > Liste des films</a><br>
<a href="NewFilm.php" > Nouveau film</a>
        
        

