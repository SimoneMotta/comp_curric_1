<!DOCTYPE >
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP</title>
	</head>
	<body>
		
		<?php
			
			function multiplica($num1, $num2){
			$valor = 0;

			For($i=0; $i < $num1; $i++){
			  $valor = $num1 * $num2;
			}
			return $valor;
			}

			echo multiplica(3,5);
		?>

		
	</body>
</html>
