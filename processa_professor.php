<?php

include 'db.php';

$nome_professor = $_POST['nome_professor'];
$data_nascimento = $_POST['data_nascimento'];
$data_criacao = $_POST['data_criacao'];

$query = "INSERT INTO professor(nome_professor, data_nascimento, data_criacao)
		  VALUES('$nome_professor', '$data_nascimento', '$data_criacao')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=professor');