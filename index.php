<?php

        include 'en-tete.html';

        //require rather then include because the file is mandetory to run the 
        require('connexion.php');

            // Établir la connexion avec PDO
            $conn = new PDO("mysql:host=localhost;dbname=utilisateurs", "admin", "admin");
                        
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

        if(($_POST['couriel']) && (str_contains(($_POST['courielle']), '@'))) {
            $erreurs[] = "le couriel est vide!<br>";
        }

        if($_POST['mot_de_passe'] != $_POST['valider_mdp']){
            $erreurs[] = "Les mot de passe ne sont pas egale!<br>";
        }
   // courriel = string replace _ code, emaile
        }
        


        if(empty($erreurs)) {
            $prenom = mysqli_real_escape_string($conn, $prenom);
            $nom = mysqli_real_escape_string($conn, $nom);
            $courriel = mysqli_real_escape_string($conn, $courriel);
            $mot_de_passe = mysqli_real_escape_string($conn, $mot_de_passe);


            $query = "SELECT * FROM utilisateurs WHERE courriel = '$courriel'";
            $result = mysqli_query($conn, $query);
            if (!$result) {
                die("requete echouee: " . mysqli_error($conn));
            }


            if (mysqli_num_rows($result) > 0) {
                echo "Un compte est déjà associé à cet email.";
            } else {
                $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);
        
                $query_insert = "INSERT INTO utilisateurs (prenom, nom, courriel, mot_de_passe) VALUES ('$prenom', '$nom', '$courriel', '$mot_de_passe_hash')";
                $result_insert = mysqli_query($conn, $query_insert);
        
                if (!$result_insert) {
                    die("requete d'insertion echouee: " . mysqli_error($conn));
                }
            }
        

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