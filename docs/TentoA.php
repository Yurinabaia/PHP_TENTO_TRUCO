<?php 
	$cont = 0;
	$ValoresA = $_POST['Tentos'];
	$strcon = mysqli_connect('localhost','root','','tentoseqa') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO tentosa VALUES ";
$sql .= "('$cont','$ValoresA')"; 

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);

header("Location: paginatruco.php");

exit;
			
?>
