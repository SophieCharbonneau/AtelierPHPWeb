

<?php

include "./LIB/db.php";

var_dump($_REQUEST);
$titre = $_REQUEST["titre"];
$anneeprod = $_REQUEST["anneeprod"];
$synopsis = $_REQUEST["synop"];


dbAjouterFilm($titre,$anneeprod ,$synopsis);

echo "Ajout effectué"

?>
