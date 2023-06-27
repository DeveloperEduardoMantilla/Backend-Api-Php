<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\RegionsModel;

    class RegionsController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="regions";
            $response=RegionsModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="regions";
            $response=RegionsModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="regions";
            $response = RegionsModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="regions";
            $response = RegionsModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="regions";
            $find = RegionsModel::getDataId($table,$id);
            if(!empty($find)){
                $response = RegionsModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>