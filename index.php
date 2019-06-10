<?php
# Iniciar Sessão
session_start();

# Base de Dados
include 'db.php';

if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = addslashes($_GET['pagina']);
	}
	else{
		$pagina = 'matricula';
	}
}
else{
	$pagina = 'home';
}


# Cabeçalho
include 'header.php';

# Conteúdo da Página

switch ($pagina) {
	case 'curso': include 'views/curso.php'; break;
	case 'aluno': include 'views/aluno.php'; break;
	case 'professor': include 'views/professor.php'; break;
	case 'matricula': include 'views/matricula.php'; break;
	case 'inserir_curso': include 'views/inserir_curso.php'; break;
	case 'inserir_aluno': include 'views/inserir_aluno.php'; break;
	case 'inserir_professor': include 'views/inserir_professor.php'; break;
	case 'inserir_matricula': include 'views/inserir_matricula.php'; break;
	default: include 'views/home.php'; break;
}

# Rodapé 
include 'footer.php';
