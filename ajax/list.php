<?php

include_once("../lib/backbone.php");

header('Content-type: application/json; charset=utf-8');

if($_POST) {
    if(!isset($_POST['output']) || empty(trim($_POST['output'])) || !isset($_POST['list']) || empty(trim($_POST['list']))) {
        echo json_encode(["status" => "error", "result" => "Bad Request! You did not fill in all the required parameters"]);  
        die();   
    }
    else {
        $output = htmlspecialchars(strip_tags($_POST['output']));
        $method = htmlspecialchars(strip_tags($_POST['method']));

        if(!in_array($method, array_keys($lists))) {
            echo json_encode(["status" => "error", "result" => "Bad Request! Invalid list convert type", "converters" => $lists]);  
            die();      
        }
        else {

            $list = $_POST['list'];
  
            if($method == 'dupes') {
                $l2 = explode(PHP_EOL, $list);
                $l = array_unique(array_filter($l2));

                $result = implode(PHP_EOL, $l);
            }
            elseif($method == 'flip') {
                $l2 = explode(PHP_EOL, $list);
                $l = array_reverse($l2);

                $result = implode(PHP_EOL, $l);
            }
            else {
                $result = $list;
            }
            
            if($output == 'nl') {
                $result2 = $result;
            }
            elseif($output == 'c') {
                $result2 = implode(', ', explode(PHP_EOL, $result));
            }
            elseif($output == 's') {
                $result2 = implode(' ', explode(PHP_EOL, $result));
            }
            elseif($output == 'pa') {
                $result2 = 'Array("' . implode('", "', explode(PHP_EOL,$result)) . '")';
            }
            elseif($output == 'json') {
                $result2 = json_encode(explode(PHP_EOL, $result), true);
            }

            echo json_encode(["status" => "success", "result" => $result2]);
            die();
        }
    }
}

else {
    echo json_encode(["status" => "error", "result" => "Bad Request, this API is served as a POST request."]);
}


?>