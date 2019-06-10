<?php

include 'db.php';

$id_aluno = $_POST['id_aluno'];
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

$query = "UPDATE aluno SET id_curso = $id_curso, nome_aluno = '$nome_aluno', data_nascimento = '$data_nascimento', logradouro = '$logradouro', numero = '$numero', bairro = '$bairro,', cidade = '$cidade', estado = '$estado', cep = $cep, data_criacao = '$data_criacao' WHERE id_aluno = $id_aluno";

mysqli_query($conexao, $query);

header('location:index.php?pagina=aluno');
