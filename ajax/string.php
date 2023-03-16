<?php

include_once("../lib/backbone.php");

header('Content-type: application/json; charset=utf-8');

if($_POST) {
    if(!isset($_POST['text']) || empty(trim($_POST['text'])) || !isset($_POST['type']) || empty(trim($_POST['type']))) {
        echo json_encode(["status" => "error", "result" => "Bad Request! You did not fill in all the required parameters"]);  
        die();   
    }
    else {  
        $type = htmlspecialchars(strip_tags($_POST['type']));

        if(!in_array($type, array_keys($string))) {
            echo json_encode(["status" => "error", "result" => "Bad Request! Invalid string type", "string" => $string]);  
            die();      
        }
        else {
            $text = $_POST['text'];

            if($type == 'uppercase') {
                $result = strtoupper($text);
            }
            elseif($type == 'lowercase') {
                $result = strtolower($text);
            }
            elseif($type == 'sentencecase') {
                $result = sentenceCase($text);
            }
            elseif($type == 'alternatingcase') {
                $result = alternatingCase($text);
            }
            elseif($type == 'capitalizedcase') {
                $result = ucwords($text);
            }
            elseif($type == 'brainfuck') {
                $result = brainfuck($text);
            }
            elseif($type == 'flip') {
                $result = strrev($text);
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