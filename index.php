<?php

final class Index {

    function init() {
        spl_autoload_register(array($this, 'loadClass'));
    }

    function loadClass($name) {
        $classes = array(
            'LoginAction' => 'action/LoginAction.php',
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
            default:
                require __DIR__ . "/index.phtml";
                break;
        }     
    }
}

$index = new Index();
$index->init();
$index->execute();