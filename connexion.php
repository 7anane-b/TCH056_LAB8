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





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $courriel = $_POST['courriel'];
    $mot_de_passe = $_POST['mot de passe'];

    $errors = []; // Tableau pour stocker les messages d'erreur

    // Valider les données 
    if (empty($nom) || empty($prenom) || (empty($courriel)) || empty($mot_de_passe)) {
        echo "Erreur : Tous les champs doivent être remplis correctement.";
} 
 if (!ctype_alpha($_POST['prenom'])) {
    $errors['prenom'] = "Le prénom doit contenir uniquement des caractères alphabétiques.";
}
if (!ctype_alpha($_POST['nom'])) {
    $errors['nom'] = "Le nom de famille doit contenir uniquement des caractères alphabétiques.";
}


if ( strpos($_POST['courriel'], '@') == false && strpos($_POST['courriel'], '.') == false) {
    $errors['courriel'] = "Le courriel n'est pas valide";
}




if ($_POST['mot_de_passe'] !== $_POST['confirmation_mot_de_passe']) {
    $errors['mot_de_passe'] = "Les mots de passe ne correspondent pas.";
}


$conn = new mysqli($servername, $username, $password, $dbname); // Connexion à la base de données
$query = "SELECT * FROM users WHERE courriel = '$courriel'";

$result = $conn->query($query);
$courriel = $conn->real_escape_string($_POST['courriel']); // l'adapter pour la connexion
if ($result->num_rows > 0) {
    $errors['courriel_unique'] = "L'adresse de courriel est déjà utilisée.";
}

// Si le tableau d'erreurs est vide, aucune erreur n'a été trouvée
if (count($errors) == 0) {
    // mettre les données 
} else {
    
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
}

// Fermez la connexion à la base de données
$conn->close();

    
} 
    
    
    
    
    
    

?>
