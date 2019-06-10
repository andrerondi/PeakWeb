<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir Novo Aluno</h1>
<form method="post" action="processa_aluno.php">
	<br>
	<label class="badge badge-secondary">Nome Aluno:</label><br>
	<input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
	<br>
	<label class="badge badge-secondary">Data de Nascimento: (aaaa-mm-dd)</label><br>
	<input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento">
	<br><br>
	<label class="badge badge-secondary">ENDEREÇO:</label><br>
	<label class="badge badge-secondary">CEP:</label><br>
	<input class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" placeholder="Insira o CEP">
	<label class="badge badge-secondary">Rua:</label><br>
	<input class="form-control" name="logradouro" type="text" id="rua" size="60" placeholder="Insira o nome da rua:">
	<label class="badge badge-secondary">Número:</label><br>
	<input class="form-control" name="numero" type="text" name="numero" placeholder="Insira o número:">
	<label class="badge badge-secondary">Bairro:</label><br>
	<input class="form-control"  name="bairro" type="text" id="bairro" size="40" placeholder="Insira o seu bairro:">
	<label class="badge badge-secondary">Cidade:</label><br>
	<input class="form-control"  name="cidade" type="text" id="cidade" size="40" placeholder="Insira o sua cidade:">
	<label class="badge badge-secondary">Uf:</label><br>
	<input class="form-control" name="estado" type="text" id="uf" size="2" placeholder="Insira o seu estado:">
	<br><br>
	<label class="badge badge-secondary">Data de Criação: (aaaa-mm-dd)</label><br>
	<input class="form-control" type="text" name="data_criacao" placeholder="Insira a data de criação">
	<br><br>
	<p class="badge badge-secondary">Selecione o Curso</p>
	<select class="form-control" name="escolha_curso">
		<option>Selecione um Curso</option>
		<?php
		while ($linha = mysqli_fetch_array($consulta_curso)){
			echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
		}
		?>
	</select>
	<br><br>
	<input type="submit" class="btn btn-success" value="Inserir Aluno">
</form>

<?php } else { ?>
	<?php while ($linha = mysqli_fetch_array($consulta_aluno)){ ?>
		<?php if($linha['id_aluno'] == $_GET['editar']){ ?>

			<h1>Editar Aluno</h1>
			<form method="post" action="edita_aluno.php">
				<input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
				<label class="badge badge-secondary">Nome Aluno:</label><br>
				<input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno']; ?>">
				<br>
				<label class="badge badge-secondary">Data de Nascimento: (aaaa-mm-dd)</label><br>
				<input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha['data_nascimento']; ?>">
				<br><br>
				<label class="badge badge-secondary">ENDEREÇO:</label><br>
				<label class="badge badge-secondary">CEP:</label><br>
				<input class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" placeholder="Insira o CEP" value="<?php echo $linha['cep']; ?>">
				<label class="badge badge-secondary">Logradouro:</label><br>
				<input class="form-control" name="logradouro" type="text" id="rua" size="60" placeholder="Insira o nome da rua:" value="<?php echo $linha['logradouro']; ?>">
				<label class="badge badge-secondary">Número:</label><br>
				<input class="form-control" name="numero" type="text" name="numero" placeholder="Insira o número:" value="<?php echo $linha['numero']; ?>">
				<label class="badge badge-secondary">Bairro:</label><br>
				<input class="form-control"  name="bairro" type="text" id="bairro" size="40" placeholder="Insira o seu bairro:" value="<?php echo $linha['bairro']; ?>">
				<label class="badge badge-secondary">Cidade:</label><br>
				<input class="form-control"  name="cidade" type="text" id="cidade" size="40" placeholder="Insira o sua cidade:" value="<?php echo $linha['cidade']; ?>">
				<label class="badge badge-secondary">Uf:</label><br>
				<input class="form-control" name="estado" type="text" id="uf" size="2" placeholder="Insira o seu estado:" value="<?php echo $linha['estado']; ?>">
				<br><br>
				<label class="badge badge-secondary">Data de Criação: (aaaa-mm-dd)</label><br>
				<input class="form-control" type="text" name="data_criacao" placeholder="Insira a data de criação" value="<?php echo $linha['data_criacao']; ?>">
				<br><br>
				<p class="badge badge-secondary">Selecione o Curso</p>
				<select class="form-control" name="escolha_curso">
					<option>Selecione um Curso</option>
					<?php
					while ($linha = mysqli_fetch_array($consulta_curso)){
						echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
					}
					?>
				</select>
				<br><br>
				<input type="submit" class="btn btn-success" value="Editar Aluno">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>
