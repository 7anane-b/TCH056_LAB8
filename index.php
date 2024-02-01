<?php

        include 'en-tete.html';


        ?>


<?php

    echo "<div  style='background-color:lightpink; display:flex; 
    flex-direction: column; justify-content: space-between;
    padding: 20px; border-radius: 20px;'>";
       
       echo "<label for='prenom'>Prenom:</label>";
        echo "<input type='text' id='prenom' name='prenom'>";

        echo "<label for='nom'>Nom de famille:</label>";
       echo  "<input type='text' id='nom' name='nom'>";

       echo "<label for='couriel'>Courriel:</label>";
        echo "<input type='couriel' id='couriel' name='couriel'>";

        echo "<label for='psw'>Mot de Passe :</label>";
        echo "<input type='password' id='psw' name='psw'>";

       echo "<label for='psw2'>Confirmer le mot de passe:</label>";
        echo "<input type='password' id='psw2' name='psw2'>";
               echo "<section>"; 
       echo "<input type='submit' style='width:40vw;';>";
        echo "<input type='reset' style='width:40vw;'>";
    echo "</section>";

        echo "</div>";

       echo  "</form>";


        ?>

        <?php

        include 'pied.html';


        ?>