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
            $this->user="sputik";
            $this->password="Sp3tn1kC@";
            $this->db="campuslands";
            $this->port="3306";
            $this->driver="mysql"; 
        }
        
        public function connect(){
            $conexion ="mysql:host=".$this->host.";dbname=".$this->db."; charset=utf8";
            $atributos=[PDO::ATTR_ERRMODE => PDO::ERRRMODE_EXCEPTION];
            $objConexion= new PDO($conexion, $this->user,$this->password,$atributos);
            return $objConexion;
        }*/

        function __construct()     {     
            $this->host="172.16.48.204";
            $this->user="sputnik";
            $this->password="Sp3tn1kC@";
            $this->db="campusland";
            $this->port="3306";
            $this->driver="mysql";    
            try {             
                $this->conx = new PDO($this->driver . ":host=" . $this->host. ";port=" . $this->port . "; dbname=" . $this->db . "; user=" . $this->user . "; password=" . $this->password);             
                $this->conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);             
                echo "ok";         
            } catch (PDOException $error) {             
                echo "No me pude conectar" . $error->getMessage();         
            }     
        }
    }

    $obj = new Connection();
    $bd=$obj->connect();
    var_dump($bd);
?>