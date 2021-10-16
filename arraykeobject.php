<?php
$array = ["TV","HP","Kipas Anging"];


$object = json_decode(json_encode($array));
var_dump($object);

echo '<pre>', print_r($array), '</pre>';