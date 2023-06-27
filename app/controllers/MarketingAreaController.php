<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\MarketingAreaModel;

    class MarketingAreaController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="marketing_area";
            $response=MarketingAreaModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="marketing_area";
            $response=MarketingAreaModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="marketing_area";
            $response = MarketingAreaModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="marketing_area";
            $response = MarketingAreaModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="marketing_area";
            $find = MarketingAreaModel::getDataId($table,$id);
            if(!empty($find)){
                $response = MarketingAreaModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>