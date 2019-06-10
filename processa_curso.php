<?php

include 'db.php';

$nome_curso = $_POST['nome_curso'];
$data_criacao = $_POST['data_criacao'];
$id_professor = $_POST['escolha_professor'];

$query = "INSERT INTO curso(id_professor, nome_curso, data_criacao)
		  VALUES($id_professor, '$nome_curso', '$data_criacao')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=curso');
