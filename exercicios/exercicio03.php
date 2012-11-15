<!DOCTYPE >
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP</title>
	</head>
	<body>
		<?php
		$quant = 4;
		switch ($quant) {
			case 0 :
				echo "Não há produto cadastrado.<br/>";
				break;
			case 1 :
				echo "há um produto cadastrado.<br/>";
				break;
			case $quant == 2 && $quant == 3 :
				echo "Você possui vários produtos cadastrados.<br/>";
				break;
			default :
				echo "Cadastro inválido, tente novamente.<br/>";
				break;
		}
		?>
	</body>
</html>