<?php

function connexionPDO($hostname, $username, $password, $database) {
     
     try {

           // Établir la connexion avec PDO
           $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
         
           // Activer le mode d'erreur
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
     } catch(PDOException $e) {

           // Retourner une valeur vide en cas d'échec de la connexion
           return null;

     }
     
   }

   ?>