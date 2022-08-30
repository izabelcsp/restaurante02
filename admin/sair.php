<?php
    session_start();

    unset(
        $_SESSION['usuarioId'],
        $_SESSION['UsuarioNome'],
        $_SESSION['usuarioNiveisAcessoId'],
        $_SESSION['usuarioEmail'],
        $_SESSION['usuarioSenha']
    );

    $_session['logindesLogado'] = "Deslogado com sucesso";

    header("location: index.php");
?>
