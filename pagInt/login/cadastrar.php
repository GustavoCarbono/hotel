<?php 
    include('./conexao.php');
    $usuario = $mysqli->real_escape_string($_POST['usuario']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT COUNT(*) AS total FROM tbl_usuario WHERE usuario = '$usuario'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    $row = mysqli_fetch_assoc($sql_query);
    if($row['total'] == 1) {
        $_SESSION['usuario_existe'] = true;
        die();
    }

    $sql_code = "INSERT INTO tbl_usuario (usuario, senha) VALUES ('$usuario', '$senha')";

    if($mysqli->query($sql_code) === TRUE) {
        $_SESSION['status_cadastro'] = true;
    }
    if(!isset($_SESSION)) {
        session_start();
    }
    $_SESSION['user'] = $nome;
    $_SESSION['logado'] = true;

    header('Location: ../../index.php');
?>