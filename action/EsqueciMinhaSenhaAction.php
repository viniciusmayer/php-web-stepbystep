<?php

class EsqueciMinhaSenhaAction {

    function execute() {
        $email = $_REQUEST["email"];

        if (empty($email)) {
            $mensagem = "Eh obrigatorio informar o email.";
            require __DIR__ . "/../esqueciminhasenha.phtml";
            return;
        }
        
        $emailAdmin = "admin@ftec.com.br";
        if ($email != $emailAdmin) {
            $mensagem = "Email nao encontrado..";
            require __DIR__ . "/../esqueciminhasenha.phtml";
            return;
        }

        $senhaAdmin = "123456";
        $mensagem = "Sua senha eh: " . $senhaAdmin;
        require __DIR__ . "/../esqueciminhasenha.phtml";
        return;
    }
}