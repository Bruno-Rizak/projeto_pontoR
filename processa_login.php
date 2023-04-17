<?php 
       require_once ("Usuario.php");

       $login = $_POST["login"];
       $senha = $_POST["senha"];
   
       $usuario = new Usuario();
       $status = $usuario->autenticar($login, $senha);
   
       if ($status == true){
           header("location:principal.php");
       }
       else{
           echo "Ops!!! Usuário/senha Inválidos :(";
       }
   