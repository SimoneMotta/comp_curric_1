 <!DOCTYPE >
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>

 <form action="formulario.php" method="POST">
              <fieldset>

                <legend>Formulario de Contato    </legend>

                <input type="hidden" name="pagina" id="contato"><br />

                 <input name="select[]" type="Select" value=""> Select<br>

                <label for="idNome"> Nome:</label><br />
                <input type="text" name="nome" id="idNome"> <br />

                <input name="Sexo[]" type="radio" value="Masculino">Masculino<br>
                <input name="Sexo[]" type="radio" value="Feminino">Feminino<br>

                <label for="idEmail" name="email">E-mail </label><br />
                <input type="email" name="email" id="idEmail"> <br />

                 <label for="idPassword"> Password:</label><br />
                <input type="password" name="password" id="idPassword"> <br>

                <label for="idMensagens"> Mensagem</label><br />
                <textarea name="mensagem" id="idMensagem" rows="3"></textarea><br />

                <p> Deseja receber e-mail?</p> <br />

                <input name="confirm[]" type="checkbox" value="Sim">Sim<br>
                <input name="confirm[]" type="checkbox" value="Não">Nao<br>

                <br>
                <button class="btn btn-primary"> Enviar Informações</button>

              </fieldset> 
            </form>
    </body>
</html>




