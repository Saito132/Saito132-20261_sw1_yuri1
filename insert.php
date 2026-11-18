<?php
include("connect.php");
try{
$stmt = $conn->query("INSERT INTO usuarios(ds_email,nm_nome) VALUES (email,name);");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
    echo $usuario['nm_nome']; echo $usuario['ds_email'];
}

}
catch(PDOException $s){
echo "Error:".$s->getMessage();



}
?>
