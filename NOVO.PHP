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
?>