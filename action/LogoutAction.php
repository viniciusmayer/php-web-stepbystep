<?php

class LogoutAction {

    function execute() {
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->logout();
        require __DIR__ . "/../login.phtml";
        return;
    }
}