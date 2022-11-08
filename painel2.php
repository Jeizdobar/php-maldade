<?php
include('conexao.php');

if (!isset($_SESSION)) {
    session_start();
}

$comando = "SELECT * FROM posts";
$query = $con->query($comando);

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
    <nav class="navbar">
        <div class="nav-left">
            <h3>La Honda</h3>
            <div class="nav-element">
                <a href="">Página Inicial</a>
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
    <h1>Bem vindo ao site <?php echo $_SESSION['funcao'] ?></h1>
    <div class="posts">
        <?php
        while ($linha = mysqli_fetch_assoc($query)) {
            echo "<a href='postnum.php?id=" . $linha["id"] . "'>";
            echo "<div class='post'>";
            echo "<div class='foto-post'>";
            echo $linha["foto"];
            // echo "<img src='https://pbs.twimg.com/profile_images/1314279007786020864/nmhZmGUG_400x400.jpg'>";
            echo "</div>";
            echo "<div class='text-post'>";
            echo "<p>";
            echo $linha["nome"];
            echo "</p>";
            echo "<p>";
            echo $linha["descricao"];
            echo "</p>";
            echo "</div>";
            echo "</div>";
            echo "</a>";
        }
        ?>
    </div>

</body>

</html>