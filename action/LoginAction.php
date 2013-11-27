<?php

class LoginAction {

    function execute() {
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];

        if (empty($email) || empty($senha)) {
            $mensagem = "Eh obrigatorio informar o email e a senha.";
            require __DIR__ . "/../login.phtml";
            return;
        }
        
        $emailAdmin = "admin@ftec.com.br";
        $senhaAdmin = "123456";
        if (($email != $emailAdmin) || ($senha != $senhaAdmin)) {
            $mensagem = "Email e/ou senha invalida.";
            require __DIR__ . "/../login.phtml";
            return;
        }

        header("Location: index.php?page=listarusuarios");
        die();
    }
}