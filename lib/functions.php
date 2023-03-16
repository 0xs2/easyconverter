<?php


function cipher($ch, $key)
{
    if (!ctype_alpha($ch))
        return $ch;

    $offset = ord(ctype_upper($ch) ? 'A' : 'a');
    return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
}


function encipher($input, $key)
{
    $output = "";

    $inputArr = str_split($input);
    foreach ($inputArr as $ch)
        $output .= cipher($ch, $key);

    return $output;
}

function decipher($input, $key)
{
    return encipher($input, 26 - $key);
}


function brainfuck($string) {
    $brainfuck  = explode(" ", $string);
    $final = [];
    $chars = [",", ".", ".", "", "", ", "];

    foreach($brainfuck as $bf) {
            $final[] = fuckupString(str_repeat(substr($bf, 0, 1), rand(1,2)) . $bf . str_repeat(substr($bf, -1), rand(1,2)) . $chars[array_rand($chars)] , rand(5,25), '');
        }
    
    return sentenceCase(implode(" ", $final));
}


function fuckupString($string, $percentage, $replace) {
    $total_length = strlen($string);
    $number_of_underscore = floor(($percentage / 100) * $total_length);
    for ($i = 1; $i <= $number_of_underscore; $i++)
    {
        $random_position = rand(0, strlen($string) - 1);
        if (substr($string, $random_position, 1) !== $replace)
        {
            $string = preg_replace("/" . (substr($string, $random_position, 1)) . "/", $replace, $string, 1);
        }
        else
        {
            $i--; 
        }
    }
    return $string;
}


function alternatingCase($string){
    $return= "";
    foreach(explode(" ",$string) as $w){
        foreach(str_split($w) as $k=>$v) {
            if(($k+1)%2!=0 && ctype_alpha($v)){
                $return .= mb_strtoupper($v);
            }else{
                $return .= $v;
            }
        }
        $return .= " ";
    }
    return $return;
}

function sentenceCase($string) { 
    $sentences = preg_split('/([.?!]+)/', $string, -1,PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE); 
    $newString = ''; 
    foreach ($sentences as $key => $sentence) { 
        $newString .= ($key & 1) == 0? 
            ucfirst(strtolower(trim($sentence))) : 
            $sentence.' '; 
    } 
    return trim($newString); 
}

function emailEncode($email) {
    $encoded = bin2hex("$email");
    $encoded = chunk_split($encoded, 2, '%');
    $encoded = '%' . substr($encoded, 0, strlen($encoded) - 1);
    return $encoded;
}

function binary_encode($str){

    $bin = (string)""; $prep = (string)"";
    
    for($i = 0; $i < strlen($str); $i++){
        
        $bincur = decbin( ord( $str[$i] ) );
        
        $binlen = strlen( $bincur );

        if( $binlen < 8 ) for( $j = 8; $j > $binlen; $binlen++ ) $prep .= "0"; 
        
        $bin .= $prep.$bincur." ";
        
        $prep = "";

    }
    return substr($bin, 0, strlen($bin) - 1);

}

function binary_decode($bin){
    $char = explode(' ', $bin);
    $nstr = '';
    foreach($char as $ch) $nstr .= chr(bindec($ch));
    return $nstr;
}



function encodeAscii($t) {
    $text = str_split($t);
    $content = "";
    $random = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*-+?/_=");
    foreach($text as $t){
        if ($t === " "){
            $count = rand(1, 66);
            $content .= $random[$count - 1];
        } else {
            $content .= sprintf("%03d", ord($t));
        }
    }
    return $content;
}


function decodeAscii($t) {
    $decode = str_split($t);
    $script = "";
    $tostring = "";
    foreach($decode as $d){
        if (is_numeric($d)){
            $tostring .= $d;
            if (strlen($tostring) === 3) {
                $script .= chr($tostring);
                $tostring = "";
            }
        } else {
            $script .= " ";
        }
    }

    return $script;
}

?>