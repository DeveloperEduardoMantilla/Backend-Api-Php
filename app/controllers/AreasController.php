<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\AreasModel;

    class AreasController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="areas";
            $response=AreasModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="areas";
            $response=AreasModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="areas";
            $response = AreasModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="areas";
            $response = AreasModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="areas";
            $find = AreasModel::getDataId($table,$id);
            if(!empty($find)){
                $response = AreasModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>