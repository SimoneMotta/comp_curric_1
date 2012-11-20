 <!DOCTYPE >
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>


        <h2>a) </h2>
        <p>
            Conversão de String para Integer
        </p>
        <?php
            $string = (int) '4.5';
            echo $string;
        ?>


        <h2>b) </h2>
        <p>
            Conversão de Integer para String 
        </p>
        <?php
            $int = (string) 20;
            echo $int;


         ?>
       <h2>c) </h2>
        <p>
            Conversão de String para Array
        </p>
        <?php
            $str = "Maria Maria";
            $arr1 = str_split($str);
            print_r($arr1);
        ?>


         <h2>d)  </h2>
        <p>
            Conversão Array para String 
        </p>
        <?php
            $array[] = "Amigo ";
            $array[] = "Meigo";
            $array[] = " Feliz";
            print_r(implode(' ', $array));
        ?>
       

         <h2>e) </h2>
        <p>
            Conversão de Integer para Float
        </p>
        <?php
            $int = (float) 40;
            echo var_dump($int);
        ?>


       
        </h2>f) </h2>
        <p>
            Conversão de float para string em formato de dinheiro: R$ 23,45
        </p>
        <?php
            $float = 26.26;
            echo "R$".number_format($float, 2, ',', '.');


?>
    </body>
</html>