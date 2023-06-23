<?php 

    require_once "connection.php";

    class GetModel{

        public function getData($table){

            $sql = "SELECT * FROM ".$table;
            $connection=new Connection();
            $conexion = $connection->connect();
            if($conexion){
                $stmt = $conexion->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return null;
            }
        }
    }

?>
