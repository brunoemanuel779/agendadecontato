<?php

require 'assets/classes/contato.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de contato </title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>	
	<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Inclusão do Plugin jQuery Validation-->
	<script type="text/javascript" src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
	<script type="text/javascript" src="assets/js/jquery.mask.min.js"></script>
	<script type="text/javascript" src="assets/js/index.js"></script>
	

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
				<div class="tituloprinc"><span class="titcontp">Cadastro</span></div>
				<div class="conteudo">
					
					<?php $contato = new Contato(); ?>
					<div class="tcont">
					<form action="cadastro.php" method="POST" class="contform" autocomplete="off" id="formcadastro">
						<div class="mb-3">										
  							<label for="nome" class="form-label">*Nome:</label>
  							<br>
  							<input class="formnome" type="text" name="nome">
						</div>
						<div class="mb-3">										
  							<label for="sobrenome" class="form-label">Sobrenome:</label>
  							<br>
  							<input class="formnome" type="text" name="sobrenome">
						</div>
						<div class="mb-3">										
  							<label for="email" class="form-label">*Email:</label>
  							<br>
  							<input class="formnome" type="email" name="email">
						</div>
						<div class="mb-3">										
  							<label for="cpf" class="form-label">*CPF:</label>
  							<br>
  							<input class="formnome" type="cpf" name="cpf" class="cpf" id="cpf" maxlength="14" onkeyup="mascaraCpf()">
						</div>
						<div class="mb-3">										
  							<label for="telefone1" class="form-label">*Telefone 1:</label>
  							<br>
  							<input class="formnome telefone1" type="telefone1" name="telefone1"  id="telefone1" maxlength="15" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" >
						</div>
						<div class="mb-3">										
  							<label for="telefone2" class="form-label">*Telefone 2:</label>
  							<br>
  							<input class="formnome telefone2" type="telefone2" name="telefone2" id="telefone2">
						</div>
						<input type="submit" value="Enviar"> <a href="index.php" class="caduser" >Voltar</a>
					</form>
					</div>
					
				</div>
			
		</main>
		<span>Desenvolvido por Bruno Emanuel</span>
	</div>
</body>
</html>