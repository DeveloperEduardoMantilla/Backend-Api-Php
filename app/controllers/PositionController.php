<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\PositionModel;

    class PositionController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="position";
            $response=PositionModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="position";
            $response=PositionModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="position";
            $response = PositionModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="position";
            $response = PositionModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="position";
            $find = PositionModel::getDataId($table,$id);
            if(!empty($find)){
                $response = PositionModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>