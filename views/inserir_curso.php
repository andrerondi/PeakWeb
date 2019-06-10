<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir Novo Curso</h1>
<form method="post" action="processa_curso.php">
	<br>
	<label class="badge badge-secondary">Nome Curso:</label><br>
	<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso">
	<br><br>
	<p class="badge badge-secondary">Selecione o Professor</p>
	<select class="form-control" name="escolha_professor">
		<option>Selecione um Professor</option>
		<?php
		while ($linha = mysqli_fetch_array($consulta_professor)){
			echo '<option value="'.$linha['id_professor'].'">'.$linha['nome_professor'].'</option>';
		}
		?>
	</select>
	<br><br>
	<label class="badge badge-secondary">Data de Criação: (aaaa-mm-dd)</label><br>
	<input class="form-control" type="text" name="data_criacao" placeholder="Insira da data de criação">
	<br><br>
	<input type="submit" class="btn btn-success" value="Inserir Curso">
</form>

<?php } else { ?>
	<?php while ($linha = mysqli_fetch_array($consulta_curso)){ ?>
		<?php if($linha['id_curso'] == $_GET['editar']){ ?>

			<h1>Editar Curso</h1>
			<form method="post" action="edita_curso.php">
				<input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
				<br>
				<label class="badge badge-secondary">Nome Curso:</label><br>
				<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['nome_curso']; ?>">
				<br><br>
				<label class="badge badge-secondary">Data de Criação: (aaaa-mm-dd)</label><br>
				<input class="form-control" type="text" name="data_criacao" placeholder="Insira da data de criação" value="<?php echo $linha['data_criacao']; ?>">
				<br><br>
				<label class="badge badge-secondary">Selecione o Professor:</label><br>
				<select class="form-control" name="escolha_professor">
					<option>Selecione um Professor</option>
					<?php
					while ($linha = mysqli_fetch_array($consulta_professor)){
						echo '<option value="'.$linha['id_professor'].'">'.$linha['nome_professor'].'</option>';
					}
					?>
				</select>
				<br><br>
				<input type="submit" class="btn btn-success" value="Editar Curso">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>
