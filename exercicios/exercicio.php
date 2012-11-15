<!DOCTYPE >
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<p>
			Faça um programa que compare o valor de 3 variáveis, apresentando qual é o maior e qual é o menos.
		</p>
		<?php
		$totalVar = array("1223", "231", "1234");
		$maior = NULL;
		$menor = $totalVar[0];

		for ($i = 0; $i < count($totalVar); $i++) {
			if ($maior <= $totalVar[$i]) {
				$maior = $totalVar[$i];
			}
			if ($menor >= $totalVar[$i]) {
				$menor = $totalVar[$i];
			}
		}
		echo "$maior <br/>";
		echo "$menor <br/>";
	?>

		<p>
			Faça um programa que calcule a média de 4 números, mostrando a mensagem OK se a média for maior ou igual a 6 e EXAME se for menor que 6.
		</p>
		<?php
		//achar a divisão de um valor $valor % 2 == 0;
		$var1 = 6;
		$var2 = 7;
		$var3 = 5;
		$var4 = 8;
		$media = 0;

		$media = ($var1 + $var2 + $var3 + $var4) / 4;
		if ($media >= 6) {
			echo "Ok, sua media é $media.";
		} else {
			echo "Exame, sua media é $media.";
		}
		?>
	</body>
</html>