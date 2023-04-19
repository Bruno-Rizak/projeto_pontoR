<?php 
    session_start();
    require_once ("Usuario.php");

     $nome = $_POST["nome"];
     $sobrenome = $_POST["sobrenome"];
     $usuario = $_POST["usuario"];
     $email = $_POST["email"];
     $login = $_POST["login"];
     $senha = $_POST["senha"]
     $confi_senha = $_POST["confi_senha"];

     $senha_criptografada = hash("sha3-256", $senha);

     $usuario = new Usuario();
 
    
     $status = $usuario->autenticar($nome,$sobrenome,$usuario,$email,$login,$senha,$confi_senha,$senha_criptografada);
 
     if ($status  == true){
         $_SESSION["logado"] = true;
         $_SESSION["user"] = $login;
 
         header("location:principal.php");
     }