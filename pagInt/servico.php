<?php 

include('login/protect.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - Serviços</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/section.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <?php if(empty($_SESSION)) {?>
    <header id="header">
        <div class="container">
            <i class="bi bi-building"></i>
            <ul>
                <li><a href="../index.php"><i class="bi bi-house"></i>Home</a></li>
                <li><a href=""><i class="bi bi-cup-hot-fill"></i>Serviços</a></li>
                <li><a href=""><i class="bi bi-calendar-week"></i>Agenda</a></li>
                <li id="conta"><a href=""><i class="bi bi-person-circle"></i>Conta</a></li>
            </ul>
            <div class="menu-login" id="menu-login">
                <a href="./pagInt/login/login.php">Login</a>
                <button><a href="pagInt/login/cadastro.php">Cadastrar</a></button>
            </div>
        </div>
    </header>
    <?php } else {?>
    <header id="header">
        <div class="container">
            <i class="bi bi-building"></i>
            <ul>
                <li><a href="../index.php"><i class="bi bi-house"></i>Home</a></li>
                <li><a href=""><i class="bi bi-cup-hot-fill"></i>Serviços</a></li>
                <li><a href=""><i class="bi bi-calendar-week"></i>Agenda</a></li>
            </ul>
            <div class="contal" id="contal">
                <a href=""><i class="bi bi-person-circle"></i>Conta</a>
            </div>
        </div>
    </header>
    <?php }?>
    <section class="section">
        <div class="divB">
            <img src="../img/cozinha luxuosa.png" alt="">
        <h4>Cozinha</h4>
        <p></p>
        </div>
        <div class="divB">
        <img src="../img/gym.png" alt="">
        <h4>Ginágio</h4>
        <p></p>
        </div>
        <div class="divB">
        <img src="../img/blibioteca.png" alt="">
        <h4>Biblioteca</h4>
        <p></p>
        </div>
        <div class="divB">
        <img src="../img/campo.png" alt="">
        <h4>Campo de tênis</h4>
        <p></p>
        </div> 
    </section>
</body>
</html>