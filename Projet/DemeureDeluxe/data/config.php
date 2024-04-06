<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'data/db.sqlite'); 
define('DB_USER', ''); 
define('DB_PASS', ''); 

require_once 'config.php';

// Fonction pour établir la connexion à la base de données SQLite
function connectDB() {
    try {
        $pdo = new PDO('sqlite:' . DB_NAME);
        // Activer le mode d'erreur PDO
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
}
?>
