<?php 
    include "app/controllers/get.controller.php";

    $table =$routesArray[2];

    $response = new GetController();
    $data =$response->getData($table);

    $json = array(
        'status'=>200,
        'Cant'=>count($data),
        'result'=>$data
    );
    echo json_encode($json, http_response_code($json["status"]));

?>