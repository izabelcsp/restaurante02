<?php
    session_start();

include_once("../includes/conexao.php");

if((isset($_POST['email'])) && (isset($_POST['senha']))){
    $usuario = mysqli_real_escape_string($conexao, $_POST['email']);

    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $result_usuario = "SELECT * FROM tb_usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);


    if(isset($resultado)){
        $_SESSION['usuarioId'] = $resultado['id'];
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
        $_SESSION['usuarioEmail'] = $resultado['email'];
        if($_SESSION['usuarioNiveisAcessoId'] == "1"){
            header("location: administrador.php");
        }elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
            header("location: colaborador.php");
        }else{
            header("location: cliente.php");
        }


    }else{
        $_SESSION['loginErro'] = "usuario ou senha invalido";
        header("location: index.php");

    }
}else{
    $_SESSION['loginErro'] = "usuario ou senha invalido";
    header("location: index.php");
}

?>