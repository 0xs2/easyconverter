<?php

include_once("../lib/backbone.php");

use johnnymast\Morsecode\Morsecode;

header('Content-type: application/json; charset=utf-8');


if($_POST) {
    if(!isset($_POST['decode']) || empty(trim($_POST['decode'])) || !isset($_POST['type']) || empty(trim($_POST['type']))) {
        echo json_encode(["status" => "error", "result" => "Bad Request! You did not fill in all the required parameters"]);  
        die();   
    }
    else {  
        $type = htmlspecialchars(strip_tags($_POST['type']));

        if(!in_array($type, array_keys($encoders))) {
            echo json_encode(["status" => "error", "result" => "Bad Request! Invalid Decoder type", "decoders" => $encoders]);  
            die();      
        }
        else {
            $decode = $_POST['decode'];

            if($type == 'base64') {
                $result = base64_decode($decode);
            }
            elseif($type == 'binary') {
                $result = binary_decode($decode);
            }
            elseif($type == 'ascii') {
                $result = decodeAscii($decode);
            }
            elseif($type == 'hex') {
                $result = hex2bin($decode);
            }
            elseif($type == 'morse') {
                $morse = new Morsecode($decode);
                $result = $morse->decode();
            }
            elseif($type == 'timestamp') {
                $result =  date("Y-m-d h:i:sa", $decode);
            }
            elseif($type == 'rot13') {
                $result = str_rot13($decode);
            }
            elseif($type == 'uu') {
                $result = convert_uudecode($decode);
            }
            elseif($type == 'html') {
                $result = htmlspecialchars_decode($decode);
            }
            elseif($type == 'caesar') {
                $result = decipher($decode, 3);
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