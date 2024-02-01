<?php

function connexionPDO($prenom, $nom, $courielle, $mot_de_passe, $valider_mdp) {
     
     try {

           // Établir la connexion avec PDO
           $conn = new PDO("mysql:host=$prenom;dbname=$nom", $courielle, $mot_de_passe, $valider_mdp);
         
           // Activer le mode d'erreur
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
     } catch(PDOException $e) {

           // Retourner une valeur vide en cas d'échec de la connexion
           return null;

     }
     
   }

  
   ?>