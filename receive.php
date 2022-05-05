<?php

$json = file_get_contents("php://input");  //getting the json file
$data =json_decode($json,true); //converting into a php array

var_dump($data);

?>

