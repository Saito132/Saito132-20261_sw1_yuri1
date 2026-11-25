<?php
include("connect.php");
try {

$conn->query("INSERT INTO usuarios (nm_name, ds_email) VALUES ('$_POST[name]', '$_POST[email]')");
$stmt = $conn->query("SELECT * FROM usuarios");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario) {
    echo '
    <div class="card" style="max-width: 320px;">
        <img src="neru.jpg" class="card-img">
        <div class="card-body">
            <h5 class="card-title">' . $usuario['nm_name'] . '</h5>
            <p class="card-text">' . $usuario['ds_email'] . '</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary">Editar</button>
            <button type="button" class="btn btn-danger">Excluir</button>
        </div>
    </div>';
}

}
catch(PDOException $s){
    echo "Error:".$s->getMessage();
}
?>
