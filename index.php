<?php

final class Index {

    function init() {
        spl_autoload_register(array($this, 'loadClass'));
    }

    function loadClass($name) {
        $classes = array(
            'LoginAction' => 'action/LoginAction.php',            
            'ListarUsuariosAction' => 'action/ListarUsuariosAction.php',
            'CriarUsuarioAction' => 'action/CriarUsuarioAction.php',
            'SalvarUsuarioAction' => 'action/SalvarUsuarioAction.php',
            'UsuarioDAO' => 'dao/UsuarioDAO.php',
        );
        require_once $classes[$name];
    }
    
    function execute() {
        $page = $_REQUEST["page"];
        switch ($page) {
            case "login":
                $action = new LoginAction();
                $action->execute();
                break;
            case "listarusuarios":
                $action = new ListarUsuariosAction();
                $action->execute();
                break;
            case "criarusuario":
                $action = new CriarUsuarioAction();
                $action->execute();
                break;
            case "salvarusuario":
                $action = new SalvarUsuarioAction();
                $action->execute();
                break;
            default:
                require __DIR__ . "/index.phtml";
                break;
        }     
    }
}

$index = new Index();
$index->init();
$index->execute();
