
<?php


include_once "./LIB/db.php";
session_start();


var_dump($_REQUEST);
$utils = dbRechercheUtilParLoginMdp($_REQUEST["login"], $_REQUEST["mdp"]);
$login = $_REQUEST["login"];



if (count($utils)> 0 ){

    $_SESSION["loginUtilConnecte"] = $login;
    header("location: listefilm.php");
    exit;
}
else {
        
    session_destroy();
    }
