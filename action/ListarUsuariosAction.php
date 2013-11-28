<?php

class ListarUsuariosAction {
    
    function execute(){
        $usuarioDAO = new UsuarioDAO();
        $numeros = $usuarioDAO->getNumeros();        
        require __DIR__ . "/../listarusuarios.phtml";
        return;
    }
}