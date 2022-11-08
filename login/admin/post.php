<?php
include("../conexao.php");

if (isset($_POST['nome']) || isset($_POST['desc']) || isset($_POST['submit'])) {

    if (strlen($_POST['nome']) == 0) {
        echo "Preencha o nome";
    } else if (strlen($_POST['desc']) == 0) {
        echo "Preencha a descrição";
    } else {
        // PARTE DA IMAGEM
        if (!empty($_FILES["image"]["name"])) {
            // Get file info 
            $fileName = basename($_FILES["image"]["name"]);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            // Allow certain file formats 
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
            if (in_array($fileType, $allowTypes)) {
                $image = $_FILES['image']['tmp_name'];
                $imgContent = addslashes(file_get_contents($image));
            } else {
                echo 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            }
        } else {
            echo 'Please select an image file to upload.';
        }

        // FIM DA PARTE DA IMAGEM

        $nome = $_POST['nome'];
        $desc = $_POST['desc'];

        $sql_comando = "INSERT INTO postagens(nome,descricao,foto) VALUES ('$nome', '$desc', '$imgContent' )"; // imgContent = variável da imagem
        $query = $con->query($sql_comando);

        if ($query) {
            header("Location: painel2.php");
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
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="textfield">
                        <label for="email">Nome do Post:</label>
                        <input type="text" id="nome" name="nome">
                    </div>
                    <div class="textfield">
                        <label for="desc">Descrição:</label>
                        <input type="text" name="desc" id="desc">
                    </div>
                    <div class="textfield">
                        <label for="image">Foto:</label>
                        <input type="file" name="image" id="image">
                    </div>
                    <input class="btnlogin" type="submit" name="submit" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>