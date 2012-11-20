<!DOCTYPE >
<html>
	<head>
		<meta charset="UTF-8">
		<title>Exercicio 7</title>
	</head>
	<body>
		<h2> a) Arrays </h2>
		<p>
		Arrays são essenciais para armazenar, gerenciar, operar sobre um conjunto de variáveis.
		Arrays simples e multidimensionais (matrizes) são suportados e podem ser
		criados pelo usuário ou por outras funções.
		</p>
		<h3>Exemplo</h3>
		<?php
		$arr = array("somearray" => array(6 => 5, 13 => 9, "a" => 42));

		echo $arr["somearray"][6];
		echo $arr["somearray"][13];  
		echo $arr["somearray"]["a"]; 
		?>

		<h2>b) Trim</h2>
		<p>
		Trim — Retira espaço no ínicio e final de uma string.
		</p>
		<h3>Exemplo</h3>
		<?php
		$string = trim("           Bom                                          Dia            ") ;
		Echo ($string);

		?>
		h2>c) Substr</h2>
		<p>
		Substr — Retorna uma parte da String.
		</p>
		<h3>Exemplo</h3>

		<?php
		$rest1 = substr("abcdef", -1);    // retorna "f"
		$rest2 = substr("abcdef", -2);    // retorna "ef"
		$rest3 = substr("abcdef", -3, 1); // retorna "d"
		echo($rest1)."<br>";
		echo($rest2)."<br>";
		echo($rest3)."<br>";
		?>

		<h2>d) Strtolower </h2>
		<p>
		Strtolower — torna a String Minuscula.
		</p>
		<h3>Exemplo</h3>
		<?php
		$string = "Faca, Aja, Resista, Reaja, Insista, Persista, VENCA";
		$string = strtolower($string);
		echo $string;
		?>

		<h2>e) Strtoupper </h2>
		<p>
		Strtoupper — torna a String Maiuscula.
		</p>
		<h3>Exemplo</h3>
		<?php
		$string = "Faca, Aja, Resista, Reaja, Insista, Persista, VENCA";
		$string = strtoupper($string);
		echo $string;
		?>

		<h2>f) ucfirst </h2>
		<p>
		ucfirst — Converte para maiúscula o primeiro caractere de uma string.
		</p>
		<h3>Exemplo</h3>
		<?php
		$string = "faca, aja, persista, reaja, insista, persista, venca";
		$string = ucfirst($string);
		echo $string;
		?>

		<h2>g) ucwords </h2>
		<p>
		ucwords — Converte para maiúsculas o primeiro caractere de cada palavra.
		</p>
		<h3>Exemplo</h3>
		<?php
		$string = "faca, aja, persista, reaja, insista, persista, venca";
		$string = ucwords($string);
		echo $string;
		?>
		<h2>h) Explode </h2>
		<p>
		Explode — Divide uma string em strings
		</p>
		<h3>Exemplo</h3>
		<?php
		$string = "João, Maria, Jose, Sandro, Marcos ";
		$pieces = explode(" ", $string);
		echo $pieces[1]."<br>"; // piece1
		echo $pieces[3]."<br>"; // piece2
		$string = "João|Maria|Jose |Sandro |Marcos ";
		print_r (explode('|', $string, 2))."<br>";
		?>

		<h2>i) var_dump</h2>
		<p>
		var_dump — Mostra informações sobre a variável
		</p>
		<h3>Exemplo</h3>
		<?php

		$a = array (1, 2, array ("a", "b", "c"));
		var_dump ($a);
		?>

		<h2>j) implode</h2>
		<p>
		implode — Junta elementos de uma matriz em uma string


		</p>
		<h3>Exemplo</h3>

		<?php

		$array = array('lastname', 'email', 'phone');
		$var = implode(",", $array);

		print $var; 

		?>

		<h2>k) htmlspecialchars </h2>
		<p>
		htmlspecialchars — Converte caracteres especiais para a realidade HTML
		</p>
		<h3>Exemplo</h3>

		<?php
		$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
		echo $new; 
		?>


		<h2>l) Join</h2>
		<p>
		Join — sinonimo de implode(Junta elementos de uma matriz em uma string);
		</p>
		<h3>Exemplo</h3>

		<?php

		$array = array('name', 'email', 'tel');
		$sep = join(",", $array);

		print $sep; // lastname,email,phone

		?>


		<h2>m) Isset</h2>
		<p>
		Isset — Informa se a variável foi iniciada
		</p>
		<h3>Exemplo</h3>

		<?php

		$verifica = ' ';	
		if (isset($verifica)) {
		echo "Essa variável existe.";
		}
		?>

		<h2>m) Strlen</h2>
		<p>
		Strlen — Retorna o tamanho de uma string.
		</p>
		<h3>Exemplo</h3>

		<?php
		$string = 'Simone Motta';
		echo strlen($string);
		?>


		<h2>o) is_float</h2>
		<p>
		is_float — Retorna se a variavel é float.
		</p>
		<h3>Exemplo</h3>

		<?php
		if(is_float(27.25)) {
		echo "É float";
		}else {
		echo "Não é float";
		}
		?>


		<h2>o.1) is_int</h2>
		<p>
		is_int — Retorna se a variavel é int.
		</p>
		<h3>Exemplo</h3>

		<?php
		if(is_int (26)) {
		echo "É Int";
		}else {
		echo "Não é int";
		}
		?>

		<h2>o.2) is_array</h2>
		<p>
		is_array— Retorna se a variavel é array.
		</p>
		<h3>Exemplo</h3>

		<?php
		$var = array ('26', '56', '89');
		if (is_array ($var)) {
		echo "É array";
		}else {
		echo "Não é array";
		}
		?>

		<h2>o.3) is_string</h2>
		<p>
		is_string— Retorna se a variavel é string.
		</p>
		<h3>Exemplo</h3>
		<?php
		if(is_string (26)) {
		echo "É String";
		}else {
		echo "Não é String";
		}
		?>


		<h2>o.4) is_bool</h2>
		<p>
		is_bool— Retorna se a variavel é boleano.
		</p>
		<h3>Exemplo</h3>
		<?php
		$var =  'a';
		if (is_bool ($var)) {
		echo "É boleano";
		}else {
		echo "Não é boleano";
		}
		?>



		<h2> o.1) is_numeric</h2>
		<p>
		is_numeric— Retorna se a variavel é numerica ou string numerica.
		</p>
		<h3>Exemplo</h3>
		<?php
		$v = is_numeric ('58635272821786587286382824657568871098287278276543219876543') ? true : false;

		var_dump ($v);
		echo $v;
		?>

		<h2>p) getdate</h2>
		<p>
		getdate — Consegue informações data/hora.
		</p>
		<h3>Exemplo</h3>
		<?php
		$hoje = getdate(); 
		print_r($hoje);
		?>

		<h2>q) empty</h2>
		<p>
		empty — Informa se a variável é vazia.
		</p>
		<h3>Exemplo</h3>
		<?php
		$var  =  0 ; 
		if (empty ( $var )) { 
		echo  '$var é umum dos Valores: 0, OU UMA Variável inexistente' ; 
		} 
		?>

		<h2>r) strip_tags </h2>
		<p>
		strip_tags — Retira as tags HTML e PHP de uma string
		</p>
		<h3>Exemplo</h3>
		<?php
		$text = '<p>Teste o sol.</p><!-- Commentario --> <a href="#fragment">A lua</a>';
		echo strip_tags($text);
		?>

		<h2>s) max e min</h2>
		<p>
		max — Localiza o maior valor.
		min — Localiza o maior valor.
		</p>
		<h3>Exemplo</h3>
		<?php
		echo max(6,20,40,10)."<br>";
		echo min(6,20,40,10); 
		?>

		<h2>t) abs </h2>
		<p>
		abs — valor absoluto.
		Se o argumento número é do tipo float, o número retornado também é float,
		em outro caso será inteiro (mas poderá retornar float se o resultado tiver magnitude maior que inteiro).
		</p>
		<h3>Exemplo</h3>
		<?php
		$abs = abs(-4.2); 
		$abs2 = abs(5);   
		$abs3 = abs(-5);  
		echo ($abs) ."<br>";
		echo ($abs2) ."<br>";
		echo ($abs3) ."<br>";
		?>

		<h2>u) round </h2>
		<p>
		round — Arredonda um número
		</p>
		<h3>Exemplo</h3>
		<?php		
		echo round(1.95583, 2)."<br>"; 
		echo round(1241757, -3)."<br>"; 

		?>
		<p>
		ceil — Arredonda frações para cima
		</p>
		<h3>Exemplo</h3>
		<?php		
		echo ceil(8.8333)."<br>";	
		?>

		<p>
		floor — Arredonda frações para baixo
		</p>
		<h3>Exemplo</h3>
		<?php		
		echo floor(8.8333)."<br>";	
		?>

		<h2>v) rand </h2>
		<p>
		rand — Gera um inteiro aleatório.
		</p>
		<h3>Exemplo</h3>
		<?php		
		echo rand(1,10)."<br>";
		echo rand(); 
		?>

		<h2>x) sqrt </h2>
		<p>
		sqrt — Raiz quadrada.
		</p>
		<h3>Exemplo</h3>
		<?php		
		echo sqrt(10)."<br>";
		echo sqrt(100); 
		?>

		<h2>w) str_replace </h2>
		<p>
		str_replace — Substitui todas as ocorrências da string de procura com a string de substituição
		</p>
		<h3>Exemplo</h3>
		<?php
		$letters = array('a', 'p');
		$fruit   = array('apple', 'pear');
		$text    = 'a p';
		$output  = str_replace($letters, $fruit, $text);
		echo $output."<br>";
		?>

		<h2>x) count </h2>
		<p>
		count — Conta o número de elementos de uma variável, ou propriedades de um objeto
		</p>
		<h3>Exemplo</h3>
		<?php
		$a[0] = 1;
		$a[1] = 3;
		$a[2] = 5;
		$result = count($a);
		echo $result;
		?>

		<h2>z) htmlentities</h2>
		<p>
		htmlentities — Converte todos os caracteres aplicáveis em entidades html.
		</p>
		<h3>Exemplo</h3>
		<?php
		$str = "A 'quote' is <b>bold</b>";
		echo htmlentities($str);
		?>		
	</body>
</html>
