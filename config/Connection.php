<?php 
    class Connection
    {
        private $host;
        private $user;
        private $password;
        private $db;
        private $port;
        private $driver;

        /*public function __construct(){
            $this->host="172.16.48.204";
            $this->user="sputnik";
            $this->password="Sp3tn1kC@";
            $this->db="campusland";
            $this->port="3306";
            $this->driver="mysql"; 
        }*/
        public function __construct(){
            $this->host="127.0.0.1";
            $this->user="root";
            $this->password="";
            $this->db="campusland";
            $this->port="3306";
            $this->driver="mysql"; 
        }
        
        public function connect(){
            try{   
            $this->objConexion= new PDO($_ENV["DB_DRIVER"].":host=".$_ENV["DB_HOST"].";port=".$_ENV["DB_PORT"].";dbname=".$_ENV["DB_DATABASE"]."; user=".$_ENV["DB_USERNAME"]."; password=".$_ENV["DB_PASSWORD"]);
            $this->objConexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            return "Conexion Establecida";
        }catch(PDOExpception $e){
                echo "Fallo la conexion a la base de datos =>"+$e->getMessage();      
            }
        }

    }
?>