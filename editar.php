<?php
session_start();
require 'assets/classes/contato.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de contato </title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<script></script>
</head>
<body>
	<div class="container">
		<nav class="navprinc">
		 	<div class="logo">
				<img src="assets/img/telefone.png" alt="">
				<span class="logotext">ContaCt!</span>
			</div>

			<div class="slogan">
				<span class="slogantext">Sua lista de contato no melhor lugar</span>
			</div>
		</nav>
		<main class="princcont">
			<div class="menulateral">
				<div class="itemml"><div class="contml"><a href="index.php" class="linkml"><img src="assets/img/casa.png" alt="" class="imgml"> <span class="txtml">Pagina Principal</span></a></div></div>
				<div class="itemml"><div class="contml"><a href="#" class="linkml"><img src="assets/img/usuario.png" alt="" class="imgml"> <span class="txtml">Pagina Usuario</span></a></div></div>
				<div class="itemml"><div class="contml"><a href="#" class="linkml"><img src="assets/img/config.png" alt="" class="imgml"> <span class="txtml">Configuracoes</span></a></div></div>
				<div class="itemml"><div class="contml"><a href="#" class="linkml"><img src="assets/img/sair.png" alt="" class="imgml"> <span class="txtml">Logout</span></a></div></div>

			</div>
			<div class="contprinci">
				<div class="tituloprinc"><span class="titcontp">Editar</span></div>
				<div class="conteudo">
					<a href="cadastrar.php" class="caduser">Cadastrar novo contato</a>
					<?php 
						$id = $_GET['id'];

						$contato = new Contato();
						$dados = $contato->consultarPorId($id);
						
						$_SESSION['id']= $id;
						

					?>
					<div class="tcont">
					<form action="editando.php" method="POST" class="contform" autocomplete="off">
						<div class="mb-3">										
  							<label for="nome" class="form-label" >*Nome:</label>
  							<br>
  							<input class="formnome" type="text" name="nome" value="<?php echo $dados['nome']; ?>">
						</div>
						<div class="mb-3">										
  							<label for="sobrenome" class="form-label" >Sobrenome:</label>
  							<br>
  							<input class="formnome" type="text" name="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
						</div>
						<div class="mb-3">										
  							<label for="email" class="form-label">*Email:</label>
  							<br>
  							<input class="formnome" type="email" name="email" value="<?php echo $dados['email']; ?>" readonly>
						</div>
						<div class="mb-3">										
  							<label for="cpf" class="form-label" >*CPF:</label>
  							<br>
  							<input class="formnome" type="cpf" name="cpf" value="<?php echo $dados['cpf']; ?>" readonly>
						</div>
						<div class="mb-3">										
  							<label for="telefone1" class="form-label">*Telefone 1:</label>
  							<br>
  							<input class="formnome" type="telefone1" name="telefone1" value="<?php echo $dados['telefone1']; ?>">
						</div>
						<div class="mb-3">										
  							<label for="telefone2" class="form-label">*Telefone 2:</label>
  							<br>
  							<input class="formnome" type="telefone2" name="telefone2" value="<?php echo $dados['telefone2']; ?>">
						</div>
						<input type="submit" value="Enviar"> <a href="index.php" class="caduser">Voltar</a>
					</form>
					</div>

			</div>																			
			
		</main>
		<span>Desenvolvido por Bruno Emanuel</span>
	</div>
</body>
</html>