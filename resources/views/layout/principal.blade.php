<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>ServJobs</title>
        <meta charset="UTF-8">

        <!--/////IMPORTAÇÕES/////-->
        <link href="css/principal.css" rel="stylesheet" />
        <link href="css/font-awesome.css" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/estiloListagem.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
        <link href="css/fontes.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/normalizandoLogin.css">
        <link rel="stylesheet" href="css/loginCadastroContato.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/index.js"></script>
        <!--/////IMPORTAÇÕES ACABA AQUI/////-->

    </head>
 
<body>

      <!--/////////////CABEÇALHO/////////////-->
      <div>
      <header>
      <nav>
           <!--******ESPAÇO PARA A LOGOTIPO******-->
            <span id="logotipo">
                    <img src="img/servlogo.png" width="100px" height="108px">
            </span>
           <!--******ESPAÇO PARA A LOGOTIPO ACABA AQUI*****-->

      <ul>
                              
           <li><a href="login.html"><span class="#"></span><br>LOGIN</a></li>
           <li><a href="contato.html"><span class="#"></span><br>CONTATO</a></li>
           <li><a href="#Pesquisa"><span class="#"></span><br>PESQUISA</a></li>
           <li><a href="#"><span class="#"></span><br>COMO FUNCIONA</a></li>
           <li><a href="#"><span class="#"></span><br>HOME</a></li>     
      </ul>
      <a name = "topo"> </a>
      </nav>
      </header>
      </div>
      <!--/////////////CABEÇALHO ACABA AQUI/////////////-->




      <!--/////////////SEÇÃO DE IMAGEM PARA SLIDE/////////////-->
      <div id="slide">
      <section>
            
            <img src="img/ServBanner4.jpg">
            <div class="msgBanner">
            <h1>ServJobs</h1>
            <p><h2>Seja bem-vindo</h2></p>

      </section>
      </div>
      <!--/////////////AQUI FINALIZA A SEÇÃO DE IMAGEM PARA SLIDE/////////////-->

      <div class="container">
      @yield('conteudo')
      </div>

      
      <!--/////////////RODAPÉ/////////////-->
      <div>
      <footer id="rodape">

            <p><br><br><br>Copyrigth &copy; 2016 - ServJobs
            <a href="#" target="_blank">&nbsp Facebook</a>
            <a href="#" target="_blank">&nbsp Twitter</a>  

      </footer>
      </div>
      <!--/////////////RODAPÉ ACABA AQUI/////////////-->




</body>

</html>
