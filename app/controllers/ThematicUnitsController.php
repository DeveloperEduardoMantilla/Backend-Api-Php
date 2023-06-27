<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\ThematicUnitsModel;

    class ThematicUnitsController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="thematic_units";
            $response=ThematicUnitsModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="thematic_units";
            $response=ThematicUnitsModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="thematic_units";
            $response = ThematicUnitsModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="thematic_units";
            $response = ThematicUnitsModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="thematic_units";
            $find = ThematicUnitsModel::getDataId($table,$id);
            if(!empty($find)){
                $response = ThematicUnitsModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>