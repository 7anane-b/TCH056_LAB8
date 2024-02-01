<?php

        include 'en-tete.html';


        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST'){

            //require rather then include because the file is mandetory to run the 
        require('connexion.php');
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