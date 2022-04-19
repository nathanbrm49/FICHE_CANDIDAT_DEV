<?php 
// paramètres de la BD (à customiser)
$server = "localhost";
$db = "fiche_greta";
$user = "root";
$secret = "";
// Fin de la déclaration des paramètres

// Cette partie est générique à l'ensemble de vos projets utilisant une base de données.
$dsn = "mysql:host=$server;dbname=$db;charset=utf8";

try {
    $pdo = new PDO($dsn, $user, $secret);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>
