<?php
//json_encode()
header('Content-Type: application/json; charset=utf-8');

//objeto PHP a json
/*$objeto = new stdClass();
$objeto->nombre = "Juan";
$objeto->edad = 23;
$objeto->pais = "Venezuela";*/
//var_dump($objeto);
/*echo "<pre>";
print_r($objeto);
echo "</pre>";*/
/*$miJSON = json_encode($objeto->pais." - ".$objeto->edad);
echo $miJSON;*/

//array simple PHP a json
/*$colores = array("verde","rojo","blanco","azul");
var_dump($colores);

$miJSON = json_encode($colores);
var_dump($miJSON);*/

//array asociativo PHP a json
/*$arregloAsoc = array('marca'=>'nokia', 'modelo'=>'1100', 'precio'=>900, 'liberado'=>true);
//var_dump($arregloAsoc);
$miJSON = json_encode($arregloAsoc);

echo($miJSON);*/

//array asosiativo con caracteres especiales (es necesario configurar el header y poner JSON_UNESCAPED_UNICODE)
$miArray = array("nombre"=>"Jazmín", "apellido"=>"Peña");
$miJSON = json_encode($miArray, JSON_UNESCAPED_UNICODE);

echo $miJSON;
?>