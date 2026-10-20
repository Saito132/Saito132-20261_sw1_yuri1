<?php
include_once("conecta.php");
try{
$sql = "INSERT INTO usuario (ds_email,nm_nome) VAlUES (:email,:name)";
$stmt = $conn->prepare($sql);

$name = $_POST['name'];
$email = $_POST['email'];

$stmt->bindParam(':name',$name);
$stmt->bindParam(':email',$email);

$stmt-> execute();

echo "connected";
echo "$email, $name";
}
catch(PDOException $s){
echo "Error:".$s->getMessage();



}
?>