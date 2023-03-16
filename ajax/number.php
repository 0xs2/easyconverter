<?php

include_once("../lib/backbone.php");

header('Content-type: application/json; charset=utf-8');

if($_POST) {
    if(!isset($_POST['number']) || empty(trim($_POST['number'])) || !isset($_POST['type']) || empty(trim($_POST['type']))) {
        echo json_encode(["status" => "error", "result" => "Bad Request! You did not fill in all the required parameters"]);  
        die();   
    }
    else {  
        $type = htmlspecialchars(strip_tags($_POST['type']));

        if(!in_array($type, array_keys($numbers))) {
            echo json_encode(["status" => "error", "result" => "Bad Request! Invalid Number convert type", "converters" => $numbers]);  
            die();      
        }
        else {
            $num = $_POST['number'];

            if($type == 'btd') {
                $result = bindec($num);
            }
            elseif($type == 'dtb') {
                $result = decbin($num);
            }
            elseif($type == 'dth') {
                $result = dechex($num);
            }
            elseif($type == 'htd') {
                $result = hexdec($num);
            }
            elseif($type == 'dto') {
                $result = decoct($num);
            }
            elseif($type == 'otd') {
                $result = octdec($num);
            }

            echo json_encode(["status" => "success", "result" => $result]);
            die();
        }
    }
}

else {
    echo json_encode(["status" => "error", "result" => "Bad Request, this API is served as a POST request."]);
}


?>