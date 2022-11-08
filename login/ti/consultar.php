<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Consulta</title>
</head>

<body>
    <?php

    if (!isset($_SESSION)) {
        session_start();
    }

    include('../nav.php');
    ?>
</body>

</html>

<?php

include('../conexao.php');

$sql = "SELECT * FROM pessoas";

$sql_comando = "SELECT * FROM pessoas";
$query = $con->query($sql_comando);

echo "<div class='container-perfil'>";
echo "<table>";

echo "<tr>";
echo "<th>";
echo "Nome";
echo "</th>";
echo "<th>";
echo "Email";
echo "</th>";
echo "<th>";
echo "Senha";
echo "</th>";
echo "<th>";
echo "Codigo";
echo "</th>";
echo "</tr>";
while ($linha = mysqli_fetch_assoc($query)) { //Associamos os valores da tabela sql com a variavel $linha
    // while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr>";

    echo "<td>";
    echo $linha["nome"]; //Aqui associamos que a varivel $linha com a coluna da tabela sql
    echo "</td>";
    echo "<td>";
    echo $linha["email"];
    echo "</td>";
    echo "<td>";
    echo $linha["senha"];
    echo "</td>";
    echo "<td>";
    echo $linha["id"];
    echo "</td>";

    echo "<td>"; //associamos o codigo com as funções Alterar e Excluir e apartir disso as de acordo com o codigo
    //as demais informções serão alteradas ou excluidas --> veremos a seguir
    echo "<a href='alterar.php?id=" . $linha["id"] . "'>Alterar</a>";
    echo "</td>";
    echo "<td>";
    echo "<a href='deletar.php?id= " . $linha["id"] . "'>Excluir</a>";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";
?>