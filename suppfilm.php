<?php

include "./LIB/db.php";

var_dump($_REQUEST);
$id = $_REQUEST["id"];

dbSupprimerFilm($id);

echo "supp effectué";
