<nav class="navbar">
    <div class="nav-left">
        <h3>La Honda</h3>
        <div class="nav-element">
            <?php
            if ($_SESSION['funcao'] == "Usuário") {
                echo '<a href="http://localhost/ua/login/painel.php">Página Inicial</a>';
            } else if ($_SESSION['funcao'] == "Administrador") {
                echo '<a href="http://localhost/ua/login/admin/painel2.php">Página Inicial</a>';
            } else if ($_SESSION['funcao'] == "Ti") {
                echo '<a href="http://localhost/ua/login/ti/painel3.php">Página Inicial</a>';
            }
            ?>
        </div>
        <div class="nav-element">
            <a href="">Conheça a casa</a>
        </div>
        <div class="nav-element">
            <a href="">Contatos</a>
        </div>
        <div class="nav-element">
            <?php
            if ($_SESSION['funcao'] == "Administrador") {
                echo '<a href="http://localhost/ua/login/admin/post.php">Postar</a>';
            } else if ($_SESSION['funcao'] == "Ti") {
                echo '<a href="http://localhost/ua/login/ti/consultar.php">Consulta SQL</a>';
            }
            ?>
        </div>
    </div>
    <div class="nav-right">
        <div class="nav-element">
            <a href="http://localhost/ua/login/perfil.php">Perfil</a>
        </div>
        <div class="nav-element">
            <a href="http://localhost/ua/login/logout.php">Sair</a>
        </div>
    </div>
</nav>