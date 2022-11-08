<?php

$codigo =  $_REQUEST["txtCodigo"];
$nome   =  $_REQUEST["txtNome"];
$email  =  $_REQUEST["txtemail"];
$senhaform  =  $_REQUEST["txtsenha"];

include('../conexao.php');

$sql = "UPDATE pessoas SET nome = '$nome', email = '$email', senha = '$senhaform' WHERE id='$codigo'";

$query = $con->query($sql);

if ($query) {
    echo "Dados alterados com sucesso!!!";
} else {
    echo "Erro ao alterar!";
}
echo "<br><br>";
echo "<a href='consultar.php'>Voltar</a>";
