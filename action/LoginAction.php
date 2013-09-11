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
        
        $emailPadrao = "admin@ftec.com.br";
        $senhaPadrao = "123456";
        if (($email != $emailPadrao) || ($senha != $senhaPadrao)) {
            $mensagem = "Email e/ou senha invalida.";
            require __DIR__ . "/../login.phtml";
            return;
        }

        require __DIR__ . "/../listarusuarios.phtml";
        return;
    }
}