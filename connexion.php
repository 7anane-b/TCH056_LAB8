<?php

function connexionPDO($prenom, $nom, $courielle, $psw) {
     
    try {

           // Établir la connexion avec PDO
           $conn = new PDO("mysql:host=$prenom;dbname=$nom", $courielle, $psw);
         
           // Activer le mode d'erreur
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
     } catch(PDOException $e) {

          // Retourner une valeur vide en cas d'échec de la connexion
          return null;

    }
    
  }
?>
