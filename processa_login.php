<?php 
       require_once ("Usuario.php");

       $login = $_POST["login"];
       $senha = $_POST["senha"];

       $senha_criptografada = hash("sha3-256", $senha);
   
       $usuario = new Usuario();
       $status = $usuario->autenticar($login, $senha_criptografada);

       
   
       if ($status  == true){
           header("location:principal.php");
       }
       else{
           echo "Ops!!! Usuário/senha Inválidos :(";
       }
   