<?php 
	$cont = 0;
	$ValoresB = $_POST['TentosB'];
	$strcon = mysqli_connect('localhost','root','','tentoseqb') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO tentosb VALUES ";
$sql .= "('$cont','$ValoresB')"; 

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);

header("Location: paginatruco.php");

exit;
			
?>