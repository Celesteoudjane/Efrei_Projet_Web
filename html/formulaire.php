<?php
// 1. Affichage des erreurs pour le débug
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Connexion à la base
// Vérifie bien que le nom du fichier est exactement db_connect.php
require_once("../include/db_connect.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 3. Récupération des données (on utilise les clés de ton Array)
    $nom    = $_POST['user_name'];
    $prenom = $_POST['user_fname'];
    $email  = $_POST['user_mail'];
    $statut = $_POST['user_statut'];
    $mess   = $_POST['user_mess'];

    try {
        // 4. Requête d'insertion
        // On utilise 'contacts' car c'est le nom dans ton phpMyAdmin
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
        // Si l'insertion échoue, on affiche l'erreur SQL précise
        echo "<h2>Erreur SQL :</h2> " . $e->getMessage();
    }
} else {
    echo "Aucune donnée reçue.";
}
?>