<?php

//string json (array contendo 3 elementos)
$json_str = '{"locales": '. 
		'[{"id": 3735, "name": "Osasco",  "state": "SP",  "latitude": -23.5320,  "longitude": -46.7920},'.
		'{"id": 3477,  "name": "São Paulo",  "state": "SP",  "latitude": -23.5480,  "longitude": -46.6360}'.
		']}';

//faz o parsing da string, criando o array "empregados"
$jsonObj = json_decode($json_str);
$locales = $jsonObj->locales;

//navega pelos elementos do array, imprimindo cada empregado
foreach ( $locales as $e )
    {
	echo "Nome: $e->name - id: $e->id - state: $e->state - latitude: $e->latitude - longitude: $e->longitude; <br><br>"; 
    }
?> 