<?php
include('conexao.php');

if (isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['submit'])) {

    if (strlen($_POST['nome']) == 0) {
        echo "Preencha seu nome";
    } else if (strlen($_POST['email']) == 0) {
        echo "Preencha seu email";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha seu senha";
    } else {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $funcao = $_POST['funcoes'];

        $sql_comando = "INSERT INTO users(nome,email,senha, funcao) VALUES ('$nome', '$email', '$senha', '$funcao')";
        $query = $con->query($sql_comando);

        if ($query) {
            header("Location: cadastro2.php");
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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <!-- <div class="left-login">
            <h2>Uau que legal</h2>
        </div> -->
        <div class="login">
            <div class="card">
                <h1>CADASTRO</h1>
                <form action="" method="post">
                    <div class="textfield">
                        <label for="email">Nome:</label>
                        <input type="text" id="nome" name="nome">
                    </div>
                    <div class="textfield">
                        <label for="senha">Email:</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha">
                    </div>
                    <div class="textfield">
                        <label for="funcoes">Função:</label>
                        <input list="funcoes" name="funcoes">
                        <datalist id="funcoes">
                            <option value="Administrador">
                            <option value="Ti">
                            <option value="Usuário">
                        </datalist>
                    </div>
                    <input class="btnlogin" type="submit" name="submit" />
                    <h4>já tem uma conta? <a href="login.php">Faça Login</a> </h4>
                </form>
            </div>
        </div>
    </div>
</body>

</html>