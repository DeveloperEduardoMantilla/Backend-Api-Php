<?php 

    namespace proyectoApi\controllers;
    use proyectoApi\models\PersonalRefModel;

    class PersonalRefController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="personal_ref";
            $response=PersonalRefModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="personal_ref";
            $response=PersonalRefModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="personal_ref";
            $response = PersonalRefModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="personal_ref";
            $response = PersonalRefModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="personal_ref";
            $find = PersonalRefModel::getDataId($table,$id);
            if(!empty($find)){
                $response = PersonalRefModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>