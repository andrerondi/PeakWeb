<a class="btn btn-success" href="?pagina=inserir_curso">Inserir Novo Curso</a>

<table class="table table-hover table-striped" id="curso">
	<thead>
		<tr>
			<th>Nome Curso</th>
			<th>Nome Professor</th>
			<th>Data Criação</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
    </thead>

    <tbody>
		<?php
			while ($linha = mysqli_fetch_array($consulta_curso)){
				echo '<tr><td>'.$linha['nome_curso'].'</td>';
				echo '<td>'.$linha['nome_professor'].'</td>';
				echo '<td>'.$linha['data_criacao'].'</td>';
		?>
			<td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>"><i class="fas fa-edit"></i></a></td>
			<td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>"><span style="color: Tomato"><i class="fas fa-trash-alt"></i></span></a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>
