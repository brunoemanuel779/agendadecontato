<?php

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
				<div class="tituloprinc"><span class="titcontp">Contatos</span></div>
				<div class="conteudo">
					<span>Pesquisar por nome!</span><br>
					<form action="pesquisando.php" method="POST">
						<div class="mb-3">										
  							<label for="nome" class="form-label">*Nome:</label>
  							<br>
  							<input class="formnome" type="text" name="nome">
  							<input type="submit" value="Pesquisar">
						</div>

						
					</form>

			</div>																			
			
		</main>
		<span class="rodapetxt">Desenvolvido por Bruno Emanuel</span>
	</div>
	
</body>

</html>