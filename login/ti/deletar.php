<?php

$codigo =  $_REQUEST["id"];

include('../conexao.php');

$sql = "DELETE FROM pessoas WHERE id='$codigo'";

$query = $con->query($sql);

if ($query) {
    echo "Dados apagados com sucesso!!!";
} else {
    echo "Erro ao apagar!";
}
echo "<br><br>";
echo "<a href='http://localhost/ua/login/ti/consultar.php'>Voltar</a>";
