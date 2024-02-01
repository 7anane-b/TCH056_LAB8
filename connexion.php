<?php
<<<<<<< Updated upstream
    
function connexionPDO($hostname, $username, $password, $database) {
=======

function connexionPDO($prenom, $nom, $courielle, $psw, $psw2) {
>>>>>>> Stashed changes
     
    try {

<<<<<<< Updated upstream
          // Établir la connexion avec PDO
          $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        
          // Activer le mode d'erreur
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e) {
=======
           // Établir la connexion avec PDO
           $conn = new PDO("mysql:host=$prenom;dbname=$nom", $courielle, $psw, $psw2);
         
           // Activer le mode d'erreur
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
     } catch(PDOException $e) {
>>>>>>> Stashed changes

          // Retourner une valeur vide en cas d'échec de la connexion
          return null;

    }
    
  }
?>
