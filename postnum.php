<?php
include('conexao.php');

$id = $_REQUEST['id'];

$comando = "SELECT * FROM posts WHERE id='$id'";
$query = $con->query($comando);

if ($linha = mysqli_fetch_assoc($query)) {
    $vcodigo = $linha["id"];
    $vnome   = $linha["nome"];
    $vdesc  = $linha["descricao"];
    $vfoto  = $linha["foto"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <div class="nav-left">
            <h3>La Honda</h3>
            <div class="nav-element">
                <a href="painel2.php">Página Inicial</a>
            </div>
            <div class="nav-element">
                <a href="">Conheça a casa</a>
            </div>
            <div class="nav-element">
                <a href="">Contatos</a>
            </div>
            <div class="nav-element">
                <a href="./admin/post.php">Postar</a>
            </div>
        </div>
        <div class="nav-right">
            <div class="nav-element">
                <a href="logout.php">Sair</a>
            </div>
        </div>
    </nav>
    <?php
    echo $vfoto;
    echo $vnome;
    echo $vdesc;
    ?>
</body>

</html>