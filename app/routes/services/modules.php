<?php 
    use proyectoApi\controllers\ModulesController;

    if($_SERVER["REQUEST_METHOD"]=="GET"){
        if(!empty($routesArray[3])){
            $data = ModulesController::getDataId($routesArray[3]);
        }else{
            $data = ModulesController::getData();
        }        
        $json = array(
            'status'=>200,
            'Cant'=>count($data),
            'result'=>$data
        );
        echo json_encode($json, http_response_code($json["status"]));
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $data= ModulesController::postData($_POST);
        
        $json = array(
            'status'=>200,
            'Cant'=>count($data),
            'result'=>$data
        );
        echo json_encode($json, http_response_code($json["status"]));
    }

    if($_SERVER["REQUEST_METHOD"]=="PUT"){
        if(!empty($routesArray[3])){
            $id=$routesArray[3];
            $data = array();
            parse_str(file_get_contents('php://input'), $data);

            $response = ModulesController::putData($data, $id);
            $json = array(
                'status'=>200,
                'result'=>"Dato actualizado con exito"
            );
        }else{
            $json = array(
                'status'=>404,
                'result'=>'Id Not Found'
            );
        }        
        echo json_encode($json, http_response_code($json["status"]));
    }

    if($_SERVER["REQUEST_METHOD"]=="DELETE"){
  
        $data = ModulesController::deleteData($routesArray[3]);

        if($data == null){
            $json = array(
                'status'=>400,
                'result'=>"No record found"
            );
            echo json_encode($json, http_response_code($json["status"]));
        }else{
            $json = array(
                'status'=>200,
                'result'=>$data
            );
            echo json_encode($json, http_response_code($json["status"]));
            }

    }

?>
