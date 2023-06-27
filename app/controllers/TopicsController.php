<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\TopicsModel;

    class TopicsController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="topics";
            $response=TopicsModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="topics";
            $response=TopicsModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="topics";
            $response = TopicsModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="topics";
            $response = TopicsModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="topics";
            $find = TopicsModel::getDataId($table,$id);
            if(!empty($find)){
                $response = TopicsModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>