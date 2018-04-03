<div class="card">
    <div class="container">
    <p>card1</p> 
	<form name=busca action="index.php" method="post">
<input class="btn input_margintop" type="search" name="busca" placeholder="Cidade">
<input class="btn btn_textcenter bg-white" type="submit" class="solid" value="Go">

</form>

<p></p>

<?php
$buscar = $_POST['busca'];

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
//	echo "Nome: $e->name - id: $e->id - state: $e->state - latitude: $e->latitude - longitude: $e->longitude; <br><br>"; 
    }
	
	
$teste = array_column($locales, "name");
$found_key = array_search('Osasco', $teste);
echo $found_key;

//echo $buscar;
?>


