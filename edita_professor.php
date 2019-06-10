<?php

include 'db.php';
$id_professor = $_POST['id_professor'];
$nome_professor = $_POST['nome_professor'];
$data_nascimento = $_POST['data_nascimento'];
$data_criacao = $_POST['data_criacao'];

$query = "UPDATE professor SET nome_professor = '$nome_professor', data_nascimento = '$data_nascimento', data_criacao = '$data_criacao' WHERE id_professor = $id_professor";

mysqli_query($conexao, $query);

header('location:index.php?pagina=professor');
