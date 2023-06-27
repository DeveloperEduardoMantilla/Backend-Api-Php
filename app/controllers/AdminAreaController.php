<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\AdminAreaModel;

    class AdminAreaController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="admin_area";
            $response=AdminAreaModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="admin_area";
            $response=AdminAreaModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="admin_area";
            $response = AdminAreaModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="admin_area";
            $response = AdminAreaModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="admin_area";
            $find = AdminAreaModel::getDataId($table,$id);
            if(!empty($find)){
                $response = AdminAreaModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>