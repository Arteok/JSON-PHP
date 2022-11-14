<?php
//json_encode()
$objeto = '{
    "nombre": "Juan",
    "edad": 23,
    "pais": "Venezuela"
}';
/*$objeto-> $nombre = "Juan";
$objeto-> $edad = 23;
$objeto-> $pais = "Venezuela";*/

$miJSON = json_encode($objeto);
echo $miJSON;
/*$data = '{
    "name": "John Doe",
    "occupation": "gardener"
}';
var_dump($data);*/
?>