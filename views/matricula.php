
<a class="btn btn-success" href="gera_pdf.php">Gerar PDF</a>

<table class="table table-hover table-striped" id="matricula">
	<thead>
		<tr>
			<th>Matrícula</th>
			<th>Nome Aluno</th>
			<th>Nome Curso</th>
			<th>Nome Professor</th>
		</tr>
	</thead>

	<tbody>
		<?php
			while ($linha = mysqli_fetch_array($consulta_matricula)){
				echo '<tr><td>'.$linha['id_aluno'].'</td>';
				echo '<td>'.$linha['nome_aluno'].'</td>';
				echo '<td>'.$linha['nome_curso'].'</td>';
				echo '<td>'.$linha['nome_professor'].'</td>';
		?>
			</tr>
		<?php
			}
		?>
	</tbody>

</table>
