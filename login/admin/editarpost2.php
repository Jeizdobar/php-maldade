<?php

$codigo =  $_REQUEST["txtCodigo"];
$nome   =  $_REQUEST["txtNome"];
$desc  =  $_REQUEST["txtdesc"];

include('../conexao.php');

$sql = "UPDATE postagens SET nome = '$nome', descricao = '$desc' WHERE id='$codigo'";

$query = $con->query($sql);

if ($query) {
    echo "Dados alterados com sucesso!!!";
} else {
    echo "Erro ao alterar!";
}
echo "<br><br>";
echo "<a href='http://localhost/ua/login/admin/painel2.php'>Voltar</a>";
