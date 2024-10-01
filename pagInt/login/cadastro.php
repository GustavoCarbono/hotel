<?php 
if(!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - Cadastro</title>
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<?php if(empty($_SESSION)) {?>
    <header id="header">
        <div class="container">
            <i class="bi bi-building"></i>
            <ul>
                <li><a href="../../index.php"><i class="bi bi-house"></i>Home</a></li>
                <li><a href="../servico.php"><i class="bi bi-cup-hot-fill"></i>Serviços</a></li>
                <li><a href=""><i class="bi bi-calendar-week"></i>Agenda</a></li>
                <li id="conta"><a href=""><i class="bi bi-person-circle"></i>Conta</a></li>
            </ul>
            <div class="menu-login" id="menu-login">
                <a href="./login.php">Login</a>
                <button><a href="">Cadastrar</a></button>
            </div>
        </div>
    </header>
    <?php } else {?>
    <header id="header">
        <div class="container">
            <i class="bi bi-building"></i>
            <ul>
                <li><a href=""><i class="bi bi-house"></i>Home</a></li>
                <li><a href=""><i class="bi bi-cup-hot-fill"></i>Serviços</a></li>
                <li><a href=""><i class="bi bi-calendar-week"></i>Agenda</a></li>
            </ul>
            <div class="contal" id="contal">
                <a href=""><i class="bi bi-person-circle"></i>Conta</a>
            </div>
        </div>
    </header>
    <?php }?>
    <section class="fsection">
        <form action="cadastrar.php" method="post">
            <label for="usuario">Nome</label>
            <input type="text" name="usuario">
            <label for="senha">Senha</label>
            <input type="password" name="senha">
        
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>