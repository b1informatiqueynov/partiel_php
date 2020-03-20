<!-- base de données -->
<?php
function getPdo(): PDO
{
  try {
    $pdo = new PDO(
      "mysql:host=localhost:3308;dbname=php_partiel",
      "php_partiel",
      ""
    );
    return $pdo;
  } catch(PDOException $ex) {
    exit("Erreur lors de la connexion à la base de données");
  }
}