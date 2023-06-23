<?php

    include 'app/models/get.model.php';

    class GetController{

        public function getData($table){

            $response = new GetModel();
            $result=$response->getData($table);
            return $result;

        }
    }
?>