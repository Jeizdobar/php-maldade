<?php
include("../conexao.php");

if (isset($_POST['nome']) || isset($_POST['desc']) || isset($_POST['foto'])) {

    if (strlen($_POST['nome']) == 0) {
        echo "Preencha o nome";
    } else if (strlen($_POST['desc']) == 0) {
        echo "Preencha a descrição";
    } else if (strlen($_POST['foto']) == 0) {
        echo "Preencha a foto";
    } else {
        $nome = $_POST['nome'];
        $desc = $_POST['desc'];
        $foto = $_POST['foto'];

        $sql_comando = "INSERT INTO posts(nome,descricao,foto) VALUES ('$nome', '$desc', '$foto')";
        $query = $con->query($sql_comando);

        if ($query) {
            header("Location: ../painel2.php");
        }
    }
}
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
    <div class="container">
        <div class="login">
            <div class="card">
                <h1>POST</h1>
                <form action="" method="post">
                    <div class="textfield">
                        <label for="email">Nome do Post:</label>
                        <input type="text" id="nome" name="nome">
                    </div>
                    <div class="textfield">
                        <label for="senha">Descrição:</label>
                        <input type="text" name="desc" id="desc">
                    </div>
                    <div class="textfield">
                        <label for="senha">Foto:</label>
                        <input type="text" name="foto" id="foto">
                    </div>
                    <input class="btnlogin" type="submit" name="submit" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>