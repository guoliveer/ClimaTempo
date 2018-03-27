<!DOCTYPE html>

include
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="_css/cards.css" />
<body>

<div class="col-md-12 w3-container w3-green">
  <h1>Clíma Tempo</h1> 
  <p>Previsão do tempo</p> 
</div>
&nbsp;

<div class="card">
    <div class="container">
    <p>card1</p> 
	<form action="busca.php" method="post">
<input class="btn input_margintop" type="search" name="busca" placeholder="Cidade">
<input class="btn btn_textcenter bg-white" type="submit" class="solid" value="Go">
</form>
<p></p>
<?php

//string json (array contendo 3 elementos)
$json_str = '{"locais": '. 
		'[{"nome":"Jason Jones", "idade":38, "sexo": "M"},'.
		'{"nome":"Ada Pascalina", "idade":35, "sexo": "F"},'.
		'{"nome":"Delphino da Silva", "idade":26, "sexo": "M"}'.
		']}';

//faz o parsing da string, criando o array "locais"
$jsonObj = json_decode($json_str);
$locais = $jsonObj->locais;

//navega pelos elementos do array, imprimindo cada empregado
foreach ( $locais as $e )
    {
	echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo<br>"; 
    }
?> 


<?php
$json = 'base/locales.json';
$echo = $json;
$obj = json_decode($json);
$teste = $obj->teste;

foreach ( $teste as $e )
    {
	echo "id: $e->id - nome: $e->nome" ; 
    }

?>

  </div>
</div>



</body>
</html>