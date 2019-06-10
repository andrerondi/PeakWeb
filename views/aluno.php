<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir Novo Aluno</a>

<table class="table table-hover table-striped" id="aluno">
	<thead>
		<tr>
			<th>Nome Aluno</th>
			<th>Data Nascimento</th>
			<th>Logradouro</th>
			<th>Nº</th>
			<th>Bairro</th>
			<th>Cidade</th>
			<th>Estado</th>
			<th>CEP</th>
			<th>Data Criação</th>
			<th>Nome Curso</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php
			while ($linha = mysqli_fetch_array($consulta_aluno)){
				echo '<tr><td>'.$linha['nome_aluno'].'</td>';
				echo '<td>'.$linha['data_nascimento'].'</td>';
				echo '<td>'.$linha['logradouro'].'</td>';
				echo '<td>'.$linha['numero'].'</td>';
				echo '<td>'.$linha['bairro'].'</td>';
				echo '<td>'.$linha['cidade'].'</td>';
				echo '<td>'.$linha['estado'].'</td>';
				echo '<td>'.$linha['cep'].'</td>';
				echo '<td>'.$linha['data_criacao'].'</td>';
				echo '<td>'.$linha['nome_curso'].'</td>';
		?>
			<td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>"><i class="fas fa-user-edit"></i></a></td>
			<td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>"><span style="color:Tomato"><i class="fas fa-user-times"></i></span></a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>
