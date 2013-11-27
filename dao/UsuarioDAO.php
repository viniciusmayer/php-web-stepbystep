<?php

class UsuarioDAO {
    
    function __construct() {
        \session_start();
        $ns = array();
        $_SESSION["numeros"] = $ns;
    }
    
    function getNumeros(){
        $numeros = $_SESSION["numeros"];
        return $numeros;
    }
    
    function setNumeros($ns){
        $_SESSION["numeros"] = $ns;
    }
    
    function addNumero($n){
        $ns = $_SESSION["numeros"];
        array_push($ns, $n);
        $_SESSION["numeros"] = $ns;
    }
    
    function logout(){
        \session_destroy();
    }
}