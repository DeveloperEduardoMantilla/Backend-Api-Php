<?php 

    $routesArray=explode("/",$_SERVER['REQUEST_URI']);
    $routesArray = array_filter($routesArray);

    /*Cuando no se hacen peticiones a la api sucede esto*/
    if(count($routesArray)<=1){
        $json = array(
            'status'=>404,
            'result'=>'Not Found'
        );
        echo json_encode($json, http_response_code($json["status"]));
        return;
    };

    /*Cuando se hacen peticiones a la api sucede esto*/
    if(count($routesArray)==2 && isset($_SERVER['REQUEST_METHOD'])){
        
        switch($_SERVER['REQUEST_METHOD']){
            case "GET":
                include "services/get.php";
                break;
            case "POST":
                $json = array(
                    'status'=>200,
                    'result'=>'Solicitud Exitosa POST'
                );
                echo json_encode($json, http_response_code($json["status"]));
            
                break;
            case "PUT":

                $json = array(
                    'status'=>200,
                    'result'=>'Solicitud Exitosa PUT'
                );
                echo json_encode($json, http_response_code($json["status"]));
                
                break;
            case "DELETE":

                $json = array(
                    'status'=>200,
                    'result'=>'Solicitud Exitosa DELETE'
                );
                echo json_encode($json, http_response_code($json["status"]));
                
                break;
        }

    }
    
?>