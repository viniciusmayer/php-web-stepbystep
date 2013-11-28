<?php

class SalvarUsuarioAction {

    function execute() {
        $n = $_REQUEST["numero"];

        if (empty($n)) {
            $mensagem = "Eh obrigatorio informar o numero.";
            require __DIR__ . "/../criarusuario.phtml";
            return;
        }
        
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->addNumero($n);
        
        header("Location: index.php?page=listarusuarios");
        require __DIR__ . "/index.php?page=listarusuarios";
        return;
    }
}