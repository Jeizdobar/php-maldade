<?php
include('../conexao.php');

if (!isset($_SESSION)) {
    session_start();
}

$comando = "SELECT * FROM postagens";
$query = $con->query($comando);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('../nav.php');
    ?>
    <h1>Bem vindo ao site <?php echo $_SESSION['funcao'] ?></h1>
    <div class="posts">
        <?php while ($linha = $query->fetch_assoc()) { ?>
            <div class="post">
                <?php echo "<a href='http://localhost/ua/login/postnum.php?id=" . $linha["id"] . "'>"; ?>
                <div class="foto-post">
                    <img style="width:100%; height: 200px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($linha['foto']); ?>">
                </div>
                <div class="text-post">
                    <p><?php echo $linha['nome'] ?></p>
                    <p><?php echo $linha['descricao'] ?></p>

                </div>
                <?php echo '</a>'; ?>
            </div>
        <?php } ?>
    </div>

</body>

</html>