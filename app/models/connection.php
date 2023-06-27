<?php 
    namespace proyectoApi\models;
    
    use PDO;

    use PDOException;

    class Connection
    {
        private $host;
        private $user;
        private $password;
        private $db;
        private $port;
        private $driver;

        public function __construct(){
            $this->host=$_ENV["DB_HOST"];
            $this->user=$_ENV["DB_USERNAME"];
            $this->password=$_ENV["DB_PASSWORD"];
            $this->db=$_ENV["DB_DATABASE"];
            $this->port=$_ENV["DB_PORT"];
            $this->driver=$_ENV["DB_DRIVER"]; 
        }
        
        public function connect():PDO{
            try{   
               $conexion = new PDO($this->driver.":host=".$this->host.";port=".$this->port.";dbname=".$this->db."; user=".$this->user."; password=".$this->password);
               $conexion->exec("set names utf8");
               $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               return $conexion;
            }catch(PDOExpception $e){
                echo "Fallo la conexion a la base de datos =>"+$e->getMessage();    
                return null;  
            }
            }

        public function closedBd($conexion){
            $conexion=null;
            return "Conexion Cerrada";
        }

    }
?>