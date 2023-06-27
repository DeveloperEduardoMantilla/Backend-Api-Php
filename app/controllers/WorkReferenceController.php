<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\WorkReferenceModel;

    class WorkReferenceController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="work_reference";
            $response=WorkReferenceModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="work_reference";
            $response=WorkReferenceModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="work_reference";
            $response = WorkReferenceModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="work_reference";
            $response = WorkReferenceModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="work_reference";
            $find = WorkReferenceModel::getDataId($table,$id);
            if(!empty($find)){
                $response = WorkReferenceModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>