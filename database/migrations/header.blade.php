	
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<title>IEADA GIRASSOL </title>
		<link rel="shortcut icon" href="imagens/ieda.jpg" type="image/x-jpg"/>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
				integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
				 crossorigin="anonymous">
			 
        <!--Area do Google Analytcs-->
        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133327026-1"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag('js', new Date());

                    gtag('config', 'UA-133327026-1');
                </script>
        <!-- Fecha Area do Google Analytcs-->     

     <!--Estilo de todo o site!-->
	 <style>
		.img{
			max-width:100%;
			max-height:100%;
		
		}
			.img-preview{
			width: 450px;
			height: 400px;
		}
	</style>


      <!--Fecha estilo do site-->
	</head>
 	<body>
 	
 	<!-- Abre NAV BAR -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-info">
		<div class="container">
			<!-- Deixa o conteudo mais fluido -->
			    <a class="navbar-brand h1 mb-0" href="/">IEADA</a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse"
				    data-target="#navbarTogglerDemo02"
				    aria-controls="navbarTogglerDemo02" aria-expanded="false"
				    aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
			    </button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav  mt-2 mt-lg-0">
					<!--<li class="nav-item active"><a class="nav-link" href="#"> <span
							class="sr-only">(current)</span></a></li>-->
					<li class="nav-item active"><a class="nav-link" href="/pastores">Pastores</a>
					</li>
					<li class="nav-item active"><a class="nav-link" href="/eventos">Eventos</a>
					</li>
					<li class="nav-item active"><a class="nav-link" href="/sermoes">Sermões</a>
					</li>
					<li class="nav-item dropdown text-white">
                    <a class="nav-link dropdown-toggle text-white " data-toggle="dropdown"  role="button"
                    aria-haspopup="true" aria-expanded="false">Departamentos</a>
                    <div class="dropdown-menu bg-info border-info text-white">
                    <a class="dropdown-item bg-info border-info text-white" href="#"></a>
                    <a class="dropdown-item bg-info border-info text-white" href="/grupo">Grupo Alfa</a>
				    <a class="dropdown-item bg-info border-info text-white" href="/louvor">Sublime Louvor</a>
				    <a class="dropdown-item bg-info border-info text-white" href="/adolescentes">Geração Eleita</a>
				    <a class="dropdown-item bg-info border-info text-white" href="/departamento">Departamento de Louvor</a>
				    <a class="dropdown-item bg-info border-info text-white" href="/escola">Escola Bíblica Dominical</a>
            		<a class="dropdown-item bg-info border-info text-white" href="/primicias">Primícias</a>
           
                    </div>
                    </li>
					<li class="nav-item active"><a class="nav-link" href="/obreiros">Obreiros</a>
                    </li>
                    <li class="nav-item active"><a class="nav-link" href="/index">Nossa História</a>
                    </li>
		            <li class="nav-item active"><a class="nav-link" href="/contato">Contato</a>
					</li>
					<li class="nav-item active"><a class="nav-link" href="/social">Redes Sociais</a>
					</li>
					 

			
						@if (Route::has('login'))
					
                    		@auth
							  
                        		<li class="nav-item active"><a class="nav-link" href="{{ url('/dashboard') }}">Home</a></li>
                    		@else
								<li class="nav-item active"><a  class="nav-link" href="{{ route('login') }}">Acessar</a></li>

                        	@if (Route::has('register'))
								<li class="nav-item active"><a class="nav-link" href="{{ route('register') }}">Criar Conta</a></li>
                        	@endif
                    		@endauth
					
            			@endif
					
				</ul>
				</div>
		</div>
	</nav>
	                <!-- Fecha nav -->
	
	
		<div class="container-fluid ">
			<div class="row alert">
				@if(session('msg'))
				<p class="alert alert-success" role="alert">{{session('msg') }}</p>
				@endif
			</div>
		</div>	
					
				