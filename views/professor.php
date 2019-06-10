<a class="btn btn-success" href="?pagina=inserir_professor">Inserir Novo Professor</a>

<table class="table table-hover table-striped" id="professor">
	<thead>
		<tr>
			<th>Nome Professor</th>
			<th>Data de Nascimento</th>
			<th>Data Criação</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
    </thead>

    <tbody>
		<?php
			while ($linha = mysqli_fetch_array($consulta_professor)){
				echo '<tr><td>'.$linha['nome_professor'].'</td>';
				echo '<td>'.$linha['data_nascimento'].'</td>';
				echo '<td>'.$linha['data_criacao'].'</td>';
		?>
			<td><a href="?pagina=inserir_professor&editar=<?php echo $linha['id_professor']; ?>"><i class="fas fa-edit"></i></a></td>
			<td><a href="deleta_professor.php?id_professor=<?php echo $linha['id_professor']; ?>"><span style="color: Tomato"><i class="fas fa-trash-alt"></i></span></a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>
