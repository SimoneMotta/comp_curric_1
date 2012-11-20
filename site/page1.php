<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Pagina 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" Site Exemplo Bootstrap">
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
            <h1>Pagina 1!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          
          </div>
          <div class="row-fluid">
            <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                            Ut venenatis tristique massa, sed rhoncus nisi rutrum sit amet. Aliquam era
                            volutpat. Nam commodo commodo venenatis. Nullam elementum est eget tortor
                            malesuada vehicula. Duis massa sapien, tristique in pretium in, volutpat at
                            lorem. Fusce nec erat ut enim vulputate fringilla. Etiam sed lectus non tellus
                            iaculis dictum. Duis varius, dui a commodo accumsan, tellus turpis ornare
                            enim, ut molestie est lacus sed dolor. Morbi ultricies posuere elit, vel
                            interdum erat consectetur ut. Nulla sit amet elit eget orci feugiat adipiscing.
                            Etiam euismod hendrerit sem sagittis lacinia. Nullam facilisis varius nulla in
                            semper. Maecenas felis odio, congue et convallis sed, lobortis ut orci. Aliquam
                            eu nibh nec augue pretium ornare ac vel tortor. Maecenas augue elit, vestibulum
                            sit amet malesuada eu, bibendum ac tellus. Morbi tristique diam ut turpis
                            tincidunt sodales.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
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
