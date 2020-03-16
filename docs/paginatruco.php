<!DOCTYPE html>
<html>
<head>
	<title>Tento do Truco</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">
      <link rel="icon" type="image/png" href="../assets/img/favicon.png">

	<style type="text/css">
			#esquerda{

		float: left; width: 50%;			
	}

			#direita{
			 float: right; width: 50%;
			}
	</style>
</head>
	<body>	
		<div class="center">
			<center>
			<img src="https://www.odefensor.com.br/site/wp-content/uploads/2018/06/truco.jpg"
			class="img-responsive">
			</center>
		</div>
		<div class="container">
			<div id="esquerda" > 
			<form method="get" action="TentoA.php">
				<div class="row">
					<div class="col-md-6">
						<h2>Equipe A</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<h4>Valor: 
						<!--Aqui vai ser retornado o banco de dados -->  
											<!--Aqui vai ser retornado o banco de dados -->               
						<?php  
						$Conut = 0;
						$valoe = 0;
						$valorFazernada = 0;
											// conecta ao banco de dados
										include_once("conexaoA.php");
										$sql = "SELECT * FROM tentosa"; //Recebendo valores do Banco de dados
								 		$resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");//Verificando se a algum erro na hora de carregar os valores
						while ($registro = mysqli_fetch_array($resultado))//Transformando os dados do bancos em array
						 {
						   $nome = $registro['equipeA'];
						   $id = $registro['id'];
						   $Conut++;
						 }
						 $sql = "SELECT sum(equipeA) FROM tentosa";//Fazendo a soma dos dados do Banco de dados
						 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");//Verificando se a algum erro na hora de carregar os valores
						 while ($registro = mysqli_fetch_array($resultado)) //Transformando os dados do banco de dados da soma em array
						 {
						 	$soma = $registro['sum(equipeA)'];
						 }
						 if($soma >= 12)//Verificando se os valores são maiores que 12, se for 12 apagar todos os valores do banco de dados
						 {
							 for ($i=0; $i < $Conut; $i++) 
							 { 
								 $sql = "DELETE FROM `tentosa` WHERE `tentosa`.`id` = $id";//Deletando valores do banco
								 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");//Verificando se a algum erro na hora de carregar os valores
								 //echo $id; //apenas para testar o apagamento dos dados no banco
								 $id = $id -1;
							 }
							 echo "Parabéns EQUIPE A venceu o jogo";
							 echo '<audio id="audio" autoplay>
						   <source src="music.mp3" type="audio/mp3" />
						</audio>';
							 $valorFazernada =1;
						}


						if($Conut >0 && $nome ==0) 
						{
						   for ($i=0; $i < $Conut; $i++) 
							 { 
								 $sql = "DELETE FROM `tentosa` WHERE `tentosa`.`id` = $id";//Deletando valores do banco
								 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");//Verificando se a algum erro na hora de carregar os valores
								 //echo $id; //apenas para testar o apagamento dos dados no banco
								 $id = $id -1;
							 }
							 echo $nome;
						}


						
							if($valorFazernada ==0 && empty($nome) == false) 
							{
								 echo $soma;
							}


						if(empty($nome) ==false) //Teste para reproduzir audio
						{
							$testemusic = $nome;
						}
						else 
						{
							$testemusic = 0;
						}

						 //echo  "<br> Quantidade é " .$Conut; //Quantidade de vezes que está pecorrendo meu vetor

						 mysqli_close($strcon);

						?> 
					                  
						</h4>
					</div>
				</div>	
				<button formmethod="post" value="0" name="Tentos" class="btn btn-danger btn-xs">Zero
				</button>
				<br>
				<br>
				<button formmethod="post" value="2" name="Tentos" class="btn btn-primary btn-xs">Dois

				</button>
				<br>
				<br>
				<button formmethod="post" value="4" name="Tentos" class="btn btn-primary btn-xs">Truco
					<?php 
					if($testemusic == 4) 
					{
			echo '<audio src="Zoeira.mp3" preload="auto" autoplay></audio>';

					}
					
					?>

				</button>
				<br>
				<br>
				<button formmethod="post" value="8" name="Tentos" class="btn btn-primary btn-xs">Seis
					<?php 
					if($testemusic == 8) 
					{
			echo '<audio src="seis9.mp3" preload="auto" autoplay></audio>';

					}
					 
					?>
				</button>
				<br>
				<br>
				<button formmethod="post" value="10" name="Tentos" class="btn btn-primary btn-xs">Nove
					<?php 
					if($testemusic == 10) 
					{
			echo '<audio src="nove8.mp3" preload="auto" autoplay></audio>';

					}
					
					?>

				</button>
				<br>
				<br>
				<button formmethod="post" value="12" name="Tentos" class="btn btn-primary btn-xs">Doze
					<?php 
					if($testemusic == 12) 
					{
			echo '<audio src="doze8.mp3" preload="auto" autoplay></audio>';
	
					}
					 
					?>

				</button>
				<br>
				<br>
				<br>
			</div>
			</form>

			<div id="direita"> 
			<form method="post" action="TentoB.php">
				<div class="row">
					<div class="col-md-6" > 
						<h2>Equipe B</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<h4>Valor: 
							<!--Aqui vai ser retornado o banco de dados -->  
							<!--Aqui vai ser retornado o banco de dados -->               
							<?php  
							$Conut = 0;
							$valoe = 0;
							$valorFazernada = 0;
												// conecta ao banco de dados
											include_once("conexaoB.php");
											$sql = "SELECT * FROM tentosb"; //Recebendo valores do Banco de dados
									 		$resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");//Verificando se a algum erro na hora de carregar os valores
							while ($registro = mysqli_fetch_array($resultado))//Transformando os dados do bancos em array
							 {
							   $nome = $registro['equipeB'];
							   $id = $registro['id'];
							   $Conut++;
							 }
							 $sql = "SELECT sum(equipeB) FROM tentosb";//Fazendo a soma dos dados do Banco de dados
							 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");//Verificando se a algum erro na hora de carregar os valores
							 while ($registro = mysqli_fetch_array($resultado)) //Transformando os dados do banco de dados da soma em array
							 {
							 	$soma = $registro['sum(equipeB)'];
							 }
							 if($soma >= 12)//Verificando se os valores são maiores que 12, se for 12 apagar todos os valores do banco de dados
							 {
								 for ($i=0; $i < $Conut; $i++) 
								 { 
									 $sql = "DELETE FROM `tentosb` WHERE `tentosb`.`id` = $id";//Deletando valores do banco
									 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");//Verificando se a algum erro na hora de carregar os valores
									 //echo $id; //apenas para testar o apagamento dos dados no banco
									 $id = $id -1;
								 }
								 echo "Parabéns EQUPIE B venceu o jogou";
								 $valorFazernada = 1;
							}


							if($Conut >0 && $nome == 0) 
							{
								for ($i=0; $i < $Conut; $i++) 
								 { 
									 $sql = "DELETE FROM `tentosb` WHERE `tentosb`.`id` = $id";//Deletando valores do banco
									 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");//Verificando se a algum erro na hora de carregar os valores
									 //echo $id; //apenas para testar o apagamento dos dados no banco
									 $id = $id -1;
								 }
								echo $nome;
							}

							if($valorFazernada ==0 && empty($nome) == false) 
							{
								 echo $soma;
							}



							if(empty($nome) ==false) //Teste para reproduzir audio
							{
								$testemusic2 = $nome;
							}
							else 
							{
								$testemusic2 = 0;
							}
							 //echo  "<br> Quantidade é " .$Conut; //Quantidade de vezes que está pecorrendo meu vetor

							 mysqli_close($strcon);

							?> 

					     
						</h4>
					</div>
				</div>
				<div class="form-group">
				<button formmethod="post" value="0" name="TentosB" class="btn btn-danger btn-xs">Zero</button>
				<br>
				<br>
				<button formmethod="post" value="2" name="TentosB" class="btn btn-primary btn-xs">Dois</button>
				<br>
				<br>
				<button formmethod="post" value="4" name="TentosB" class="btn btn-primary btn-xs">Truco
					<?php 
					if($testemusic2 == 4) 
					{
			echo '<audio src="Zoeira.mp3" preload="auto" autoplay></audio>';
					}
					
					?>

				</button>
				<br>
				<br>
				<button formmethod="post" value="8" name="TentosB" class="btn btn-primary btn-xs">Seis
				<?php 
					if($testemusic2 == 8) 
					{
			echo '<audio src="seis9.mp3" preload="auto" autoplay></audio>';

					}
					
					?>

				</button>
				<br>
				<br>
				<button formmethod="post" value="10" name="TentosB" class="btn btn-primary btn-xs">Nove
					<?php 
					if($testemusic2 == 10) 
					{
			echo '<audio src="nove8.mp3" preload="auto" autoplay></audio>';

					}
					
					?>

				</button>
				<br>
				<br>
				<button formmethod="post" value="12" name="TentosB" class="btn btn-primary btn-xs">Doze
					<?php 
					if($testemusic2 == 12) 
					{
			echo '<audio src="doze8.mp3" preload="auto" autoplay></audio>';

					}
					
					?>


				</button>
				<br>
				<br>
				<br>
				</div>
			</form>

			</div>
			</div>				
	</body>
</html>