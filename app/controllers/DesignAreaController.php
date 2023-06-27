<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\DesignAreaModel;

    class DesignAreaController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="design_area";
            $response=DesignAreaModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="design_area";
            $response=DesignAreaModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="design_area";
            $response = DesignAreaModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="design_area";
            $response = DesignAreaModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="design_area";
            $find = DesignAreaModel::getDataId($table,$id);
            if(!empty($find)){
                $response = DesignAreaModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>