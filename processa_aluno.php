<?php

include 'db.php';

$nome_aluno = $_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$data_criacao = $_POST['data_criacao'];
$id_curso = $_POST['escolha_curso'];

$query = "INSERT INTO aluno(id_curso, nome_aluno, data_nascimento, logradouro, numero, bairro, cidade, estado, cep, data_criacao)
		  VALUES($id_curso, '$nome_aluno', '$data_nascimento', '$logradouro', '$numero', '$bairro', '$cidade', '$estado', $cep, '$data_criacao')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=aluno');
