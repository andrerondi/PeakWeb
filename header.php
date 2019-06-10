<!DOCTYPE html>
<html>
<head>
	<title>Peak Cursos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="shortcut icon" href="img/favicon.png" sizes="32x32" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>

<body>
	<header>
		<nav class="navbar navbar-inverse navbar-fixed">
			<div class="container">
				
				<div class="navbar-header">
					<!-- LOGO -->
					<a href="?pagina=home" alt="peak - home" title="Home"><img id="logo" src="img/logo.png">
					</a>
					<button type="button" style="margin-top:25px" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_lista" aria-expanded="false">
						<span  class="icon-bar"></span>
						<span  class="icon-bar"></span>
						<span  class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="menu_lista">
					<ul class="nav navbar-nav navbar-right">
						<li class="link_menu"><a href="?pagina=curso">Cursos</a></li>
						<li class="link_menu"><a href="?pagina=aluno">Alunos</a></li>
						<li class="link_menu"><a href="?pagina=professor">Professores</a></li>
						<li class="link_menu"><a href="?pagina=matricula">Matrículas</a></li>
						<li class="link_menu2">
						<?php if(isset($_SESSION['login'])){ ?>
							<a href="logout.php">
								<?php echo $_SESSION['usuario']; ?>	(sair)
							</a><li>
						<?php } ?>
						</div>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<div id="conteudo" class="container"> 
