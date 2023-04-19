<?php
    function validar_sessao(){
        session_start();
        if(empty($_SESSION["logado"])){
            header("location: login.php");

        }
    }

    validar_sessao();
    
?>