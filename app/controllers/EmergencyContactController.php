<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\EmergencyContactModel;

    class EmergencyContactController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="emergency_contact";
            $response=EmergencyContactModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="emergency_contact";
            $response=EmergencyContactModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="emergency_contact";
            $response = EmergencyContactModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="emergency_contact";
            $response = EmergencyContactModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="emergency_contact";
            $find = EmergencyContactModel::getDataId($table,$id);
            if(!empty($find)){
                $response = EmergencyContactModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>