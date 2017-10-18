<?php

include_once "./LIB/db.php";

var_dump($_REQUEST);
$id = $_REQUEST["id"];

dbSupprimerFilm($id);

//redirection de page

header("Location: ListeFilm.php");
//


?>
