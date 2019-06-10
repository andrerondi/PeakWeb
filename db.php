<?php

$servidor = "localhost";
$usuario = "id9885719_peak";
$senha = "Slippb174";
$db = "id9885719_peak";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT curso.id_curso, curso.nome_curso, professor.nome_professor, curso.data_criacao
			 FROM curso, professor
			 WHERE curso.id_professor = professor.id_professor";
$consulta_curso = mysqli_query($conexao, $query);

$query = "SELECT aluno.id_aluno, aluno.nome_aluno, aluno.data_nascimento, aluno.logradouro, aluno.numero, aluno.bairro, aluno.cidade, aluno.estado, aluno.cep, aluno.data_criacao, curso.nome_curso
			 FROM aluno, curso
			 WHERE aluno.id_curso = curso.id_curso";
$consulta_aluno = mysqli_query($conexao, $query);

$query = "SELECT * FROM professor";
$consulta_professor = mysqli_query($conexao, $query);

$query = "SELECT aluno.id_aluno, aluno.nome_aluno, curso.nome_curso, professor.nome_professor 
			FROM aluno, curso, professor
			WHERE aluno.id_curso = curso.id_curso
			AND curso.id_professor = professor.id_professor";
$consulta_matricula = mysqli_query($conexao, $query);
