<script type="text/javascript">
function feito() {
	setTimeout ("window.location='index.php'", 1000);
	}
function failed() {
	setTimeout ("window.location='index.php'", 2000);
	}
	</script>


<?php
$buscar = $_POST['busca'];
echo "<script>feito()</script>";
?>



