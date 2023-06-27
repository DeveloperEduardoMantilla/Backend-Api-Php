<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\ModulesModel;

    class ModulesController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="modules";
            $response=ModulesModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="modules";
            $response=ModulesModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="modules";
            $response = ModulesModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="modules";
            $response = ModulesModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="modules";
            $find = ModulesModel::getDataId($table,$id);
            if(!empty($find)){
                $response = ModulesModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>