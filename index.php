<?php 

include('pagInt/login/protect.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="./css/section.css">
    <link rel="stylesheet" href="./css/texto.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <?php if(empty($_SESSION)) {?>
    <header id="header">
        <div class="container">
            <i class="bi bi-building"></i>
            <ul>
                <li><a href=""><i class="bi bi-house"></i>Home</a></li>
                <li><a href="./pagInt/servico.php"><i class="bi bi-cup-hot-fill"></i>Serviços</a></li>
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
                <li><a href=""><i class="bi bi-house"></i>Home</a></li>
                <li><a href="./pagInt/servico.php"><i class="bi bi-cup-hot-fill"></i>Serviços</a></li>
                <li><a href=""><i class="bi bi-calendar-week"></i>Agenda</a></li>
            </ul>
            <div class="contal" id="contal">
                <a href=""><i class="bi bi-person-circle"></i>Conta</a>
            </div>
        </div>
    </header>
    <?php }?>
    <section class="section">
        <a href="javascript:decricao(1)">
            <div class="divR">
                <img src="./img/quarto1.png" alt="">
                <h4>Cozinha</h4>
                <a href="" class="saiba">Saiba Mais</a>
            </div>
        </a>
        <a href="./pagInt/servico.php">
            <div class="divSr">
                <img src="./img/quarto2.png" alt="">
                <h4>quarto de teste</h4>
                <a href="" class="saiba">Saiba Mais</a>
            </div>
        </a>
        <a href="./pagInt/servico.php">
            <div class="divR">
                <img src="./img/quarto3.png" alt="">
                <h4>quarto de teste</h4>
                <a href="" class="saiba">Saiba Mais</a>
            </div>
        </a>
        <a href="./pagInt/servico.php">
            <div class="divSr">
                <img src="./img/quartoluxuoso.png" alt="">
                <h4>quarto de teste</h4>
                <a href="" class="saiba">Saiba Mais</a>
            </div>
        </a> 
    </section>
    <script src="./js/java.js"></script>
</body>
</html>

