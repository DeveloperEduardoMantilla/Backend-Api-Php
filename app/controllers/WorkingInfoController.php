<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\WorkingInfoModel;

    class WorkingInfoController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="working_info";
            $response=WorkingInfoModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="working_info";
            $response=WorkingInfoModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="working_info";
            $response = WorkingInfoModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="working_info";
            $response = WorkingInfoModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="working_info";
            $find = WorkingInfoModel::getDataId($table,$id);
            if(!empty($find)){
                $response = WorkingInfoModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>