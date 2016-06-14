<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>ServJobs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <link href="css/estilo.css" rel="stylesheet" />
        <!--<link href="css/fontes.css" rel="stylesheet" />-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/main.js"></script>

    </head>
    <body>
        <div>
            <header>
                <!-- menu principal -->
                <div class="menu_bar">
                    <a href="#" class="btn-menu1">
                        <span class="icon-menu-sobe"></span>
                        Menu
                    </a>
                </div>
                <div class="menu_bar">
                    <a href="#" class="btn-menu2">
                        <span class="icon-menu-desce"></span>
                        Menu
                    </a> 
                </div>

                
                <!-- navegador do menu principal -->
                <nav>
                    <span id="logotipo">Imagem do Logotipo</span>
                    <!-- lista de icones para a resolução acima de 800px, no arquivo de css foi utilizado
                         float right para alinhar os icones ao lado, e o outro menu perde a caracteristica
                         float quando em dispositivos mobiles -->
                    <ul>
                        <li><a href="#"><span class="icon-email"></span>Cadastre-se</a></li>
                        <li><a href="#"><span class="icon-html5"></span>Produtos</a></li>
                        <li><a href="#"><span class="icon-olho"></span>Empresa</a></li>
                        <li><a href="#"><span class="icon-home"></span>Home</a></li>     
                    </ul>
                    
                    <!-- lista de icones para a resolução mobile -->
                    <ul id="menuMobile">
                        <li><a href="#"><span class="icon-home"></span>Home</a></li>
                        <li><a href="#"><span class="icon-olho"></span>Empresa</a></li>
                        <li><a href="#"><span class="icon-html5"></span>Produtos</a></li>
                        <li><a href="#"><span class="icon-email"></span>Cadastre-se</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <div>
            @yield('conteudo')
        </div>
    </body>
</html>
