<?php

include 'db.php';

$id_curso = $_POST['id_curso'];
$nome_curso = $_POST['nome_curso'];
$data_criacao = $_POST['data_criacao'];
$id_professor = $_POST['escolha_professor'];

$query = "UPDATE curso SET id_professor = $id_professor, nome_curso = '$nome_curso', data_criacao = '$data_criacao' WHERE id_curso = $id_curso";

mysqli_query($conexao, $query);

header('location:index.php?pagina=curso');
