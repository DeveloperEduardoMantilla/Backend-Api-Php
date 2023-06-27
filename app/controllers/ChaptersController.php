<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\ChaptersModel;

    class ChaptersController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="chapters";
            $response=ChaptersModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="chapters";
            $response=ChaptersModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="chapters";
            $response = ChaptersModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="chapters";
            $response = ChaptersModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="chapters";
            $find = ChaptersModel::getDataId($table,$id);
            if(!empty($find)){
                $response = ChaptersModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>