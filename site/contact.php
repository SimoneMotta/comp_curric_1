<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Pagina 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" Site Exemplo Bootstrap PG 2">
    <meta name="author" content="Simone Motta">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    
    <!-- Comentaro Condicional se o IE > 9 o navegador vai ler o q tem em comoentario no codigo-->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

     </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">  <!-- deixa o menu fixo mesmo  -->
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand" href="# page1.php">Pagina 1</a>
          <div class="nav-collapse collapse">
              <ul class="nav">
              <li class="active"><a href="# page2.php">Pagina 2</a></li>
              <li><a href="#aboutme.php">About</a></li>
              <li><a href="#contact.php">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">

        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Sidebar</li>
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->

        <div class="span9">
          <div class="hero-unit">
            <h1> Contato!</h1>
            
            <form action="formulario.php" method="POST">
              <fieldset>

                <legend>Formulario de Contato    </legend>

                <input type="hidden" name="pagina" id="contato">
                <label for="idNome"> Nome:</label>
                <input type="text" name="nome" id="idNome">
                <label for="idEmail" name="email">E-mail </label>
                <input type="email" name="email" id="idEmail">
                <label for="idMensagens"> Mensagem</label>
                <textarea name="mensagem" id="idMensagem" rows="3"></textarea>
                <br>
                <button class="btn btn-primary"> Enviar Informações</button>

              </fieldset> 
            </form>
          </div>                       
                      
          </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->

  </body>
</html>
