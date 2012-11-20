<!DOCTYPE >
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>

<?php
// $_POST = variavel
//var_dump($_POST);
// SE for enviado um post e a variaavel não é vazia 
// entao mostrar dados
if(isset($_POST ["pagina"]) && $_POST["pagina"] == "exercico09") {
echo $_POST["nome"]."<br>";

echo $_POST["email"]."<br>";
echo $_POST["mensagem"];

}else{
	header("Location:exercico09.php");
}
?>
	</body>
</html>
