<?php

include 'db.php';
$id_professor = $_GET['id_professor']; 

$query = "DELETE FROM professor WHERE id_professor = $id_professor";

mysqli_query($conexao, $query);

header('location:index.php?pagina=professor');
