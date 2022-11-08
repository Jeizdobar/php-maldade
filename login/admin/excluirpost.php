<?php

$codigo =  $_REQUEST["id"];

include('../conexao.php');

$sql = "DELETE FROM postagens WHERE id='$codigo'";

$query = $con->query($sql);

if ($query) {
    echo "Dados apagados com sucesso!!!";
} else {
    echo "Erro ao apagar!";
}
echo "<br><br>";
echo "<a href='http://localhost/ua/login/admin/painel2.php'>Voltar</a>";
