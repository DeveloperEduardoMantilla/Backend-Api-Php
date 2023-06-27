<?php 

    namespace proyectoApi\models;
    use proyectoApi\models\Connection;
    use PDO;
    class ThematicUnitsModel{

        //POST => Me crea un dato
        static public function postData($table, $data){
            $llave="";
            $valor="";

            foreach ($data as $key => $value) {
                $llave.=$key.",";
                $valor.=":".$key.",";
            }

            $llave = substr($llave,0,-1);
            $valor = substr($valor,0,-1);

            $sql = "INSERT INTO $table ($llave) VALUES ($valor)";
            
            $connection=new Connection();
            $conexion = $connection->connect();

            if($conexion){
                $stmt = $conexion->prepare($sql);
                foreach ($data as $key => $value) {
                    $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
                }
            
                if($stmt->execute()){
                    $response = array(
                        "Result"=> "Dato insertado con exito"
                    );
                    return $response;
                }else{
                    return $conexion->errorInfo();
                }
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return null;
            }
        }

        //Get => Me trae toda la data de la tabla
        static public function getData($table){

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

        //Get/id => Me trae la data de la tabla filtrado por el id
        static public function getDataId($table, $id){

            $sql = "SELECT * FROM ".$table. " WHERE id=".$id;
            
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

        //DELETE => Me elimina un dato por medio de un id
        static public function deleteData($table, $id){

            $sql = "DELETE FROM $table WHERE id = $id";
                        
            $connection=new Connection();
            $conexion = $connection->connect();

            if($conexion){
                $stmt = $conexion->prepare($sql);
                if($stmt->execute()){
                    return "Registro eliminado con exito";
                }else{
                    return $conexion->errorInfo();
                }
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return null;
            }
        }

        //PUT => Actualiza los datos :D
        static public function putData($table, $data, $id){

            $set="";

            foreach ($data as $key => $value) {
                $set .= $key." = :".$key.",";
            }

            $set= substr($set, 0, -1);

            $sql="UPDATE $table SET $set WHERE id=:id";

            $link=new Connection();
            $conexion = $link->connect();
            $stmt=$conexion->prepare($sql);

            foreach ($data as $key => $value) {
                $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
            }
            $stmt->bindParam(":id", $id, PDO::PARAM_STR);

            if($stmt -> execute()){
                $response = array(
                    "Comment"=> "The proccess was successful"
                );
                return $response;
            }else{
                return $link->errorInfo();
            }
        }

    }

?>
