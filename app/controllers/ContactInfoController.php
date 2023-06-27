<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\ContactInfoModel;

    class ContactInfoController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="contact_info";
            $response=ContactInfoModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="contact_info";
            $response=ContactInfoModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="contact_info";
            $response = ContactInfoModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="contact_info";
            $response = ContactInfoModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="contact_info";
            $find = ContactInfoModel::getDataId($table,$id);
            if(!empty($find)){
                $response = ContactInfoModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>