<!DOCTYPE html>

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


<?php
include "buscar.PHP";
?> 

  </div>
</div>
&nbsp;
&nbsp;
<div class="card">
    <div class="container">
    <p>card2</p> 
	<form action="busca.php" method="post">
<input class="btn input_margintop" type="search" name="busca" placeholder="Cidade">
<input class="btn btn_textcenter bg-white" type="submit" class="solid" value="Go">
</form>
<p></p>

  </div>
</div>


</body>
</html>