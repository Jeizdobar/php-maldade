<?php
include('conexao.php');

if (!isset($_SESSION)) {
    session_start();
}
$id = $_REQUEST['id'];

$comando = "SELECT * FROM postagens WHERE id='$id'";
$query = $con->query($comando);

if ($linha = mysqli_fetch_assoc($query)) {
    $vcodigo = $linha["id"];
    $vnome   = $linha["nome"];
    $vdesc  = $linha["descricao"];
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
    <?php
    include('nav.php')
    ?>
    <img style="" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($linha['foto']); ?>">
    <?php
    echo $vnome;
    echo $vdesc;
    ?>
</body>

</html>