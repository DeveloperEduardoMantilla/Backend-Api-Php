<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\StaffModel;

    class StaffController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="staff";
            $response=StaffModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="staff";
            $response=StaffModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="staff";
            $response = StaffModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="staff";
            $response = StaffModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="staff";
            $find = StaffModel::getDataId($table,$id);
            if(!empty($find)){
                $response = StaffModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>