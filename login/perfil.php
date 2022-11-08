<?php
include('conexao.php');

if (!isset($_SESSION)) {
    session_start();
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
    <?php
    include('nav.php');
    ?>
    <div class="container-perfil">
        <div class="perfilcard">
            <img class="perfil-img" src="https://http2.mlstatic.com/D_NQ_NP_358615-MLB25289058462_012017-O.jpg" alt="">
            <div class="perfil-txt">
                <h2>
                    <?php
                    echo $_SESSION['nome'];
                    ?>
                </h2>
                <p>
                    <?php
                    echo $_SESSION['email'];
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>