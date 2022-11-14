<?php
//header('Content-Type: application/json; charset=utf-8');
//json_decode()
//string => objeto PHP
/*$json ='{"a":1, "b":2, "c":3, "d":45}';
//var_dump($json);

$objetoPHP = json_decode($json);
var_dump($objetoPHP);*/
//$lista = new stdClass();
$lista = '{
    "nombre":"Pedro",
    "edad":35,
    "boolean":true,
    "educacion":{
        "primaria":"Esc. Belgrano",
        "secundaria":"Colegio Nacional"
    }
}';
//var_dump($lista);
 $listaObj = json_decode($lista,true);
 var_dump($listaObj);


?>