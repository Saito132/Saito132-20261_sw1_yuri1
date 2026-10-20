<?php
include_once('configdb.php');

try {
$conn = new PDO('mysql:host='. $host .';dbname='.$dbname.';port='.$port, $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
echo "Erro na conexão: " . $e->getMessage();
}
?>