<?php
mysql_connect("localhost", "root","") or
die(mysql_error());

mysql_select_db("teste_php") or die(mysql_error());

$sql = "INSERT INTO contact(nome, email, message, created)
VALUES ('Simone Motta', 'kayly_@hotmail.com', 'Mensagem', NOW())";

mysql_query($sql) or die(mysql_error());
echo "funcionou";

mysql_close();


