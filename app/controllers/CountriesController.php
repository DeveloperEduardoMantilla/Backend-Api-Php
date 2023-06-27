<?php 

    namespace proyectoApi\controllers;
    use proyectoApi\models\CountriesModel;

    class CountriesController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="countries";
            $response=CountriesModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="countries";
            $response=CountriesModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="countries";
            $response = CountriesModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="countries";
            $response = CountriesModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="countries";
            $find = CountriesModel::getDataId($table,$id);
            if(!empty($find)){
                $response = CountriesModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>