<?php

        include 'en-tete.html';

        //require rather then include because the file is mandetory to run the 
        require('connexion.php');

            // Établir la connexion avec PDO
            $conn = new PDO("mysql:host=localhost;dbname=tch056_cours_8b", "admin", "admin");
                        
            //
            if ($conn == null) {
                die("Connexion échouée avec PDO : " . $conn->connect_error);
            } else {
                echo "Connexion réussie avec PDO!<br>";
            }

            // Requête SQL
            $requete = "SELECT * FROM utilisateurs";

            // Exécuter la requête
            $resultat = $conn->query($requete);

            // Afficher le nombre de résultats
            echo "Nombre de résultats: " . $resultat->rowCount() . "<br>";

            // Afficher les résultats ligne par ligne
            while($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
                echo $ligne["identifiant"] . " " . $ligne["mot_de_passe"] . "<br>";
            }




        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST'){



        $erreurs = array();

        if(($_POST['prenom']) && !is_numeric($_POST['prenom'])) {
            $erreurs[] = "le prenom est vide!<br>";
        }

        if(($_POST['nom']) && !is_numeric($_POST['nom'])) {
            $erreurs[] = "le nom est vide!<br>";
        }

        if(($_POST['courielle']) && (str_contains(($_POST['courielle']), '@'))) {
            $erreurs[] = "le courielle est vide!<br>";
        }

        if($_POST['mot_de_passe'] != $_POST['valider_mdp']){
            $erreurs[] = "Les mot de passe ne sont pas egale!<br>";
        }
   // courriel = string replace _ code, emaile
        }
        
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .main{
            background-color:lightpink;
            display:flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px; 
            border-radius: 20px; 
            width:50vw;
            margin-left:200px;
        }

    </style>
</head>
<body>
    
    <form action='connexion.php' method='post'>
    
        <div class="main" >
        
            <label for='prenom'>Prenom:</label>
            <input type='text' id='prenom' name='prenom' required>

            <label for='nom'>Nom de famille:</label>
            <input type='text' id='nom' name='nom' required>

            <label for='couriel'>Courriel:</label>
            <input type='couriel' id='couriel' name='couriel' required>

            <label for='psw'>Mot de Passe :</label>
            <input type='password' id='psw' name='psw' required>

            <label for='psw2'>Confirmer le mot de passe:</label>
            <input type='password' id='psw2' name='psw2' required>

            <section>
                <input type='submit' style='width:20vw;' value="S'inscrire">
                <input type='reset' style='width:20vw;' value="Effacer">
            </section>

        </div>

    </form>

</body>
</html>
       
        

        <?php

        include 'pied.html';


        ?>