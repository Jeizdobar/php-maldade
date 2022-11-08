<?php

include('../conexao.php');

$codigo = $_REQUEST["id"];

$sql = "SELECT * FROM postagens WHERE id= '$codigo'";

$query = $con->query($sql);

//Associamos a variavel $stm a varavel $usuario, pois a partir dai de acordo com o codigo da usuario conseguiremos fazer a alteração
if ($usuario = $query->fetch_assoc()) {
    $vcodigo = $usuario["id"];
    $vnome   = $usuario["nome"];
    $vdesc = $usuario["descricao"];
} else {
    echo "ERRO";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h2>Alteração</h2>
    <main>
        <form name="form1" method="post" action="editarpost2.php">

            Código: <br>
            <!--Readonly permite que o valor do codigo não seja alterado e apareça somente para leitura,
                                 pois como o Codigo é nossa chave-primaria ele não deve ser alterado-->
            <input type="text" name="txtCodigo" readonly value="<?php echo $vcodigo; ?>"> <br>

            Nome: <br>
            <input type="text" name="txtNome" value="<?php echo $vnome; ?>"> <br>

            Email: <br>
            <input type="text" name="txtdesc" value="<?php echo $vdesc; ?>"> <br>

            <input class="btnenviar" type="submit" value="Alterar Dados"> <br>
        </form>
    </main>
</body>

</html>