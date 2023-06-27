<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\MaintAreaModel;

    class MaintAreaController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="maint_area";
            $response=MaintAreaModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="maint_area";
            $response=MaintAreaModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="maint_area";
            $response = MaintAreaModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="maint_area";
            $response = MaintAreaModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="maint_area";
            $find = MaintAreaModel::getDataId($table,$id);
            if(!empty($find)){
                $response = MaintAreaModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>