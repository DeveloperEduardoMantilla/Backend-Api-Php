<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\ThemesModel;

    class ThemesController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="themes";
            $response=ThemesModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="themes";
            $response=ThemesModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="themes";
            $response = ThemesModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="themes";
            $response = ThemesModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="themes";
            $find = ThemesModel::getDataId($table,$id);
            if(!empty($find)){
                $response = ThemesModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>