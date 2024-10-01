<?php 
    include('./conexao.php');

    $nNome = '';
    $nSenha = '';
    if(isset($_POST['usuario']) || isset($_POST['senha'])) {

        if(strlen($_POST['usuario']) == 0) {
            $nNome = 'preencha seu nome de usuário';
        } else if(strlen($_POST['senha']) == 0) {
            $nSenha = 'Preencha sua senha';
        } else {
            $usuario = $mysqli->real_escape_string($_POST['usuario']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM tbl_usuario WHERE usuario = '$usuario' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            $qtd = $sql_query->num_rows;

            if($qtd == 1) {
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['user'] = $usuario;
                $_SESSION['logado'] = true;
                
                header('location: ../../index.php');
            } else {
                echo "Falhar ao logar! E-mail ou senha incorretos";
            }
        }
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
                <li><a href="./pagInt/servico.php"><i class="bi bi-cup-hot-fill"></i>Serviços</a></li>
                <li><a href=""><i class="bi bi-calendar-week"></i>Agenda</a></li>
                <li id="conta"><a href=""><i class="bi bi-person-circle"></i>Conta</a></li>
            </ul>
            <div class="menu-login" id="menu-login">
                <a href="">Login</a>
                <button><a href="./cadastro.php">Cadastrar</a></button>
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
        <form action="" method="post">
            <p>
                <label for="usuario">Nome de usuário</label>
                <input type="text" name="usuario" id="usuario">
            </p>
            <?php 
            if(!isset($nNome) == 0) {
                echo "<p class=\"nNome\">" . $nNome . "</p>";
            }
            ?>
            <p>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </p>
            <?php 
            if(!isset($nSenha) == 0) {
                echo "<p class=\"nSenha\">" . $nSenha . "</p>";
            }
            ?>
            <p>
                <input type="submit" value="Enviar">
            </p>
        </form>
    </section>
</body>
</html>