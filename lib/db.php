<?php

define("DB_CHAINE_CONNEXION", "mysql:host=localhost;dbname=streaming");
define("DB_USER", "root");

function dbRechercheUtilParLoginMdp( $login, $mdp ) {
      $pdo = dbConnexion();
      return $pdo->query("SELECT * FROM util where login='$login' and mdp='$mdp'" )->fetchAll();
      
     
}

function dblisterfilm(){
    $pdo = dbConnexion();
     $statement = $pdo->query("SELECT * FROM film" );
     $resultat = $statement ->fetchall();
     
     return $resultat;
}
function dbSupprimerFilm ($id) {
     $pdo = dbConnexion();
     $pdo->exec("DELETE FROM film WHERE id=$id" );
}


function dbAjouterFilm ($titre, $anneeProd, $synopsis){
    
    $pdo = dbConnexion();
    $pdo->exec("INSERT INTO film(titre, annee_prod, synopsis) VALUES ('$titre', $anneeProd, '$synopsis') ");
}

function dbConnexion (){
    try{
        
        
        $pdo = new PDO(DB_CHAINE_CONNEXION, DB_USER);
        return $pdo;
    } catch (Exception $ex) {

        die("ERREUR : " .$ex->getMessage());
    }
}

