<?php

//Hacemos conexion a la api
$apiURL= 'http://192.168.1.67:4000/infocards2/user1/';
$curl= curl_init($apiURL);
// Definimos la URL y otras opciones
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_URL, $apiURL);

// Ejecutamos y obtenemos la respuesta de la API
$website_content= curl_exec($curl); 
 
// Cerramos cURL
curl_close($curl); 

$key= 'KeyMustBe16ByteOR24ByteOR32ByT2!';
$encrypt_method= "aes-256-ecb";
$result= openssl_decrypt($website_content, $encrypt_method, $key);
$result= json_decode($result);
//var_dump($result);
echo "La tarjeta activada es: " . $result->current_card;

?>