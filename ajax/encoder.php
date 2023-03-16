<?php

include_once("../lib/backbone.php");

use johnnymast\Morsecode\Morsecode;

header('Content-type: application/json; charset=utf-8');


if($_POST) {
    if(!isset($_POST['encode']) || empty(trim($_POST['encode']) || !isset($_POST['type']) || empty(trim($_POST['type'])))) {
        echo json_encode(["status" => "error", "result" => "Bad Request! You did not fill in all the required parameters"]);  
        die();   
    }
    else {  
        $type = htmlspecialchars(strip_tags($_POST['type']));

        if(!in_array($type, array_keys($encoders))) {
            echo json_encode(["status" => "error", "result" => "Bad Request! Invalid Encoder type", "encoders" => $encoders]);  
            die();      
        }
        else {
            $encode = $_POST['encode'];

            if($type == 'base64') {
                $result = base64_encode($encode);
            }
            elseif($type == 'binary') {
                $result = binary_encode($encode);
            }
            elseif($type == 'ascii') {
                $result = encodeAscii($encode);
            }
            elseif($type == 'hex') {
                $result = bin2hex($encode);
            }
            elseif($type == 'morse') {
                $morse = new Morsecode($encode);
                $result = $morse->encode();
            }
            elseif($type == 'timestamp') {
                $date = date_create($encode);
                $result = date_format($date,"U");
            }
            elseif($type == 'md5') {
                $result = md5($encode);
            }        
            elseif($type == 'sha1') {
                $result = sha1($encode);
            }   
            elseif($type == 'sha256') {
                $result = hash('sha256', $encode);
            }   
            elseif($type == 'sha512') {
                $result = hash('sha512', $encode);
            }
            elseif($type == 'rot13') {
                $result = str_rot13($encode);
            }
            elseif($type == 'uu') {
                $result = convert_uuencode($encode);
            }
            elseif($type == 'caesar') {
                $result = encipher($encode, 3);
            }
            elseif($type == 'html') {
                $result = htmlspecialchars($encode);
            }
            elseif($type == 'email') {
                if(!filter_var($encode, FILTER_VALIDATE_EMAIL)) {
                    echo json_encode(["status" => "error", "result" => "Bad Request! You must enter a valid email!"]);
                    die();
                }
                else {
                    $result = emailEncode($encode);
                }
            }
            elseif($type == 'url') {
                if(!filter_var($encode, FILTER_VALIDATE_URL)) {
                    echo json_encode(["status" => "error", "result" => "Bad Request! You must enter a valid URL!"]);
                    die();
                }
                else {
                    $result = rawurlencode($encode);
                }
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