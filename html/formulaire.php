<?php
// erreur 
ini_set('display_errors', 1);
error_reporting(E_ALL);

// connection
// verif fichier
require_once("../include/db_connect.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // recup les bonne donnée
    $nom    = $_POST['user_name'];
    $prenom = $_POST['user_fname'];
    $email  = $_POST['user_mail'];
    $statut = $_POST['user_statut'];
    $mess   = $_POST['user_mess'];

    try {
    
        // contacts phpMyAdmin
        $sql = "INSERT INTO contacts (nom, prenom, email, statut, message) 
                VALUES (:nom, :prenom, :email, :statut, :message)";
        
        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':nom'    => $nom,
            ':prenom' => $prenom,
            ':email'  => $email,
            ':statut' => $statut,
            ':message'=> $mess
        ]);

        echo "<h2>Succès !</h2>";
        echo "Les données de " . htmlspecialchars($prenom) . " ont été ajoutées à la base.";
        echo "<br><a href='contact.php'>Retour au formulaire</a>";

    } catch(PDOException $e) {
        // Si echoue
        echo "<h2>Erreur SQL :</h2> " . $e->getMessage();
    }
} else {
    echo "Aucune donnée reçue.";
}
?>