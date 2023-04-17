<?php 
    require_once("Database.php");

   
    class Usuario{

        private $login;
        private $senha;
    
        public function __set($atributo, $valor)
        {
            if (property_exists($this, $atributo)) {
                $this->$atributo = $valor;
            }
        }
    
        public function __get($atributo)
        {
            if (property_exists($this, $atributo)) {
                return $this->$atributo;
            }
        }
    
    
        public function __construct()
        {
        }


     

        function autenticar($login, $senha){
         
        $database = new Database();
        $con = $database->connect();
        
        
        $sql = "SELECT  id , login FROM usuario WHERE login = :login AND senha = :senha";

        $st = $con->prepare($sql);
        $st->bindParam(':login', $login);
        $st->bindParam(':senha', $senha);
        $retorno = $st->execute();
        $dados = $st->fetchAll();
        if(sizeof($dados) ==1){
            header("location:principal.php");
        }
        else{
            echo "false";
        }
    
        }

    }   
    
 