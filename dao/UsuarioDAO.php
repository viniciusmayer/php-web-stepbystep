<?php

class UsuarioDAO {

    function __construct() {
        \session_start();
        $ns = $_SESSION["numeros"];
        if (!isset($_SESSION["numeros"])) {
            $ns = array();
            $_SESSION["numeros"] = $ns;
        }
    }

    function getNumeros() {
        $ns = $_SESSION["numeros"];
        return $ns;
    }

    function setNumeros($ns) {
        $_SESSION["numeros"] = $ns;
    }

    function addNumero($n) {
        $ns = $_SESSION["numeros"];
        array_push($ns, $n);
        $_SESSION["numeros"] = $ns;
    }

    function logout() {
        \session_destroy();
    }

}