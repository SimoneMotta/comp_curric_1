<!DOCTYPE >
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP</title>
	</head>
	<body>

		<h1>Nome</h1>
		<div class="conteudo">
			<?php
			$nome1 = "Fulano";
			$nome2 = "Fulana";
			$nome3 = "Ciclano";
			$sexo1 = "M";
			$sexo2 = "F";
			$sexo3 = "M";
						
				
			
			if ($sexo1 == "M" && $sexo2 == "M" && $sexo3 == "M") {
				echo "A equipe é formada por meninos.";
			}elseif ($sexo1 == "F" && $sexo2 == "F" && $sexo3 == "F") {
				echo "A equipe é formada por meninas.";
			} else {
				echo "A equipe é mista.";
			}	
						
			?>
		<p> <?php echo $nome1." - ".$sexo1.".<br /"?> </p>
		<p> <?php echo $nome2." - ".$sexo2.".<br />"?> </p>
		<p> <?php echo $nome3." - ".$sexo3.".<br />"?> </p>
		
		</div>
	</body>
</html>