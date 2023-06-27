<?php     
    $routesArray=explode("/",$_SERVER['REQUEST_URI']);
    $routesArray = array_filter($routesArray);

    //Este segmento de codigo me permite validar si viene un ruta
    if(sizeof($routesArray)<=1){
        $json = array(
            'status'=>404,
            'result'=>'Not Found'
        );
        echo json_encode($json, http_response_code($json["status"]));
        return;
    }

    $METHOD = $_SERVER["REQUEST_METHOD"];
    $RUTA = $routesArray[2];


    if(!empty($METHOD))
    {
        switch ($RUTA) {
            case 'countries':
                include_once "services/countries.php";
                break;
            case 'work_reference':
                include_once "services/work_reference.php";
                break;
            case 'personal_ref':
                include_once "services/personal_ref.php";
                break;
            case 'working_info':
                include_once "services/working_info.php";
                break;
            case 'regions':
                include_once "services/regions.php";
                break;
            case 'cities':
                include_once "services/cities.php";
                break;
            case 'emergency_contact':
                include_once "services/emergency_contact.php";
                break; 
            case 'contact_info':
                include_once "services/contact_info.php";
                break;   
            case 'staff':
                include_once "services/staff.php";
                break; 
            case 'admin_area':
                include_once "services/admin_area.php";
                break; 
            case 'maint_area':
                include_once "services/maint_area.php";
                break; 
            case 'marketing_area':
                include_once "services/marketing_area.php";
                break; 
            case 'design_area':
                include_once "services/design_area.php";
                break; 
            case 'areas':
                include_once "services/areas.php";
                break; 
            case 'position':
                include_once "services/position.php";
                break; 
            case 'themes':
                include_once "services/themes.php";
                break;
            case 'modules':
                include_once "services/modules.php";
                break;
            case 'topics':
                include_once "services/topics.php";
                break;
            case 'chapters':
                include_once "services/chapters.php";
                break;
            case 'thematic_units':
                include_once "services/thematic_units.php";
                break;
            default:
                $json = array(
                    'status'=>400,
                    'comment'=>"Not Found"
                );
                echo json_encode($json, http_response_code($json["status"]));
            break;
        } 
    }

?>