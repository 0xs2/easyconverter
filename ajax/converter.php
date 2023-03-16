<?php

include_once("../lib/backbone.php");

header('Content-type: application/json; charset=utf-8');

use UnitConverter\UnitConverter;

$converter = UnitConverter::createBuilder()
    ->addSimpleCalculator()
    ->addDefaultRegistry()
    ->build();

if($_POST) {
    if(!isset($_POST['type']) || empty(trim($_POST['type'])) || !isset($_POST['to']) ||  empty(trim($_POST['to'])) || !isset($_POST['from']) ||  empty(trim($_POST['from'])) || !isset($_POST['value']) || empty(trim($_POST['value'])) || !isset($_POST['type']) || empty(trim($_POST['type']))) {
        echo json_encode(["status" => "error", "result" => "Bad Request! You did not fill in all the required parameters"]);  
        die();   
    }
    else {  
        $type = htmlspecialchars(strip_tags($_POST['type']));

        if(!in_array($type, array_keys($converters))) {
            echo json_encode(["status" => "error", "result" => "Bad Request! Invalid Converter type", "converters" => $converters]);  
            die();      
        }
        else {

            $to = htmlspecialchars(strip_tags($_POST['to']));
            $from = htmlspecialchars(strip_tags($_POST['from']));

            if(!in_array($to, array_keys($converters[$type])) || !in_array($from, array_keys($converters[$type]))) {
                echo json_encode(["status" => "error", "result" => "Bad Request! Invalid Unit type", "types" => $converters[$type]]);  
                die();          
            }
            else {
                $value = htmlspecialchars(strip_tags($_POST['value']));        

                if(!is_numeric(intval($value))) {
                    echo json_encode(["status" => "error", "result" => "Bad Request! to, from and value parameters must be numbers."]);  
                    die();     
                }
                else {
                    $result = $converter->convert($value)->from($from)->to($to);
                    echo json_encode(["status" => "success", "result" => $result]);
                    die();
                }
            } 
        }
    }
}

else {
    echo json_encode(["status" => "error", "result" => "Bad Request, this API is served as a POST request."]);
}


?>