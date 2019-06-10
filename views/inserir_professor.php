<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir Novo Professor</h1>
<form method="post" action="processa_professor.php">
	<br>
	<label class="badge badge-secondary">Nome Professor:</label><br>
	<input class="form-control" type="text" name="nome_professor" placeholder="Insira o nome do professor">
	<br><br>
	<label class="badge badge-secondary">Data de Nascimento: (aaaa-mm-dd)</label><br>
	<input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento">
	<br><br>
	<label class="badge badge-secondary">Data de Criação: (aaaa-mm-dd)</label><br>
	<input class="form-control" type="text" name="data_criacao" placeholder="Insira a data de criação">
	<br><br>
	<input type="submit" class="btn btn-success" value="Inserir Professor">
</form>

<?php } else { ?>
	<?php while ($linha = mysqli_fetch_array($consulta_professor)){ ?>
		<?php if($linha['id_professor'] == $_GET['editar']){ ?>

			<h1>Editar Professor</h1>
			<form method="post" action="edita_professor.php">
				<input type="hidden" name="id_professor" value="<?php echo $linha['id_professor']; ?>">
				<br>
				<label class="badge badge-secondary">Nome Professor:</label><br>
				<input class="form-control" type="text" name="nome_professor" placeholder="Insira o nome do Professor" value="<?php echo $linha['nome_professor']; ?>">
				<br><br>
				<label class="badge badge-secondary">Data de Nascimento: (aaaa-mm-dd)</label><br>
				<input class="form-control" type="text" name="data_nascimento" placeholder="Insira a Data de Nascimento" value="<?php echo $linha['data_nascimento']; ?>">
				<br><br>
				<label class="badge badge-secondary">Data de Criação: (aaaa-mm-dd)</label><br>
				<input class="form-control" type="text" name="data_criacao" placeholder="Insira a Data de Criação" value="<?php echo $linha['data_criacao']; ?>">
				<br><br>
				<input type="submit" class="btn btn-success" value="Editar Professor">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>