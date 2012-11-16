<?php

  // phpinfo();

  # codigo php
  // comentario em linha
  /*
    comentario em blogo
  */

  echo "<h1>Ola mundo</h1>";

  $nome1 = "Tiago Link";
  $texto2 = "Unoesc";

  echo $nome1 . " estudou na " . $texto2. "<br/>";

  echo "$nome1 estudou na $texto2 <br>";

  echo '$nome1 estudou na $texto2<br>';

  echo "{$nome1} estudou na {$texto2}";

  # Tipos de Variáveis

  # Float
  $numero1 = 34.2;

  # Int
  $nuemro2 = 123;

  # String
  $string = "Texto";

  # Boolean
  $bool = True;

  # Array
  $lista = array("valor1", 12313, "valor 3");

  # > 5.4
  // $lista = ["valor 1", 123123, "teste"];

  echo "<h2>Listas</h2>";
  echo $lista[0];

  $lista[] = 123132;

  # array["indice"] = valor

  $lista2["nome"] = "Tiago";

  echo $lista2["nome"];

  echo "<h2>Convertendo</h2>";

  $string = (int) "3 porquinhos";
  $string2 = (int) "porquinhos 3";

  echo $string . "<br>"; // 3

  echo $string2 . "<br>"; // 0

  echo "<h2>foreach</h2>";

  $frutas = array("maca", "banana", "pera", "uva");
?>

  <ul>
    <?php  foreach ($frutas as $indice => $fruta) { ?>
    <li><?php echo $indice . ": " . $fruta; ?></li>
    <?php  } ?>
  </ul>

  <hr>

  <ul>
    <?php  for ($i=0; $i < count($frutas); $i++) { ?>
       <li><?php echo $i . ": ".$frutas[$i]; ?> </li>
    <?php } ?>
  </ul>

  <?php

  $computador = array("memoria" => 512, "proc" => "Quad-Core", "hd" => "1TB");

  $lista = array(0 => "maca", 1 => "banana");

  // echo $computador["memoria"];
  ?>

  <h2>Computador</h2>

  <ul>
    <?php  foreach ($computador as $indice => $valor) { ?>
    <li><?php echo $indice . ": " . $valor; ?></li>
    <?php  } ?>
  </ul>

  <hr>

