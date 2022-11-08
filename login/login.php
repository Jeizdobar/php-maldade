<?php
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_comando = "SELECT * FROM pessoas WHERE email='$email' AND senha='$senha'";
    $query = $con->query($sql_comando);

    $quantidade = $query->num_rows;

    if ($quantidade == 1) {
        $usuario = $query->fetch_assoc();

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['funcao'] = $usuario['funcao'];

        if ($_SESSION['funcao'] == "Usuário") {
            header("Location: painel.php");
        } else if ($_SESSION['funcao'] == "Administrador") {
            header("Location:http://localhost/ua/login/admin/painel2.php");
        } else if ($_SESSION['funcao'] == "Ti") {
            header("Location: http://localhost/ua/login/ti/painel3.php");
        } else {
            echo "Sua função não existe";
        }
    } else {
        echo "<p>Erro no Login, senha ou E-mail incorretos.</p>";
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
                <h1>LOGIN</h1>
                <form action="" method="post">
                    <div class="textfield">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha">
                    </div>
                    <button type="submit" class="btnlogin">Login</button>
                    <h4>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a> </h4>
                </form>
            </div>
        </div>
    </div>
</body>

</html>