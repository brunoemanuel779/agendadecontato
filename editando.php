<?php
session_start();
require 'assets/classes/contato.php';

$id = $_SESSION['id'];

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
				<div class="tituloprinc"><span class="titcontp">Cadastro</span></div>
				<div class="conteudo">
					
					<?php $contato = new Contato(); ?>
					<?php 
					if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['sobrenome']) && !empty($_POST['sobrenome']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['cpf']) && !empty($_POST['cpf']) && isset($_POST['telefone1']) && !empty($_POST['telefone1'])) {
						$nome = addslashes($_POST['nome']);
						$sobrenome = addslashes($_POST['sobrenome']);
						$email = addslashes($_POST['email']);
						$cpf = addslashes($_POST['cpf']);
						$telefone1 = addslashes($_POST['telefone1']);
						$telefone2 = addslashes($_POST['telefone2']);

						$contato->editar($nome,$sobrenome,$email,$cpf,$telefone1,$telefone2);

					}else{
						echo "Por favor preencher todos dados obrigatorios";
					}
				?>
				<a href="index.php">Voltar</a>
					
				
				</div>
				
				</div>
			
		</main>
		<span>Desenvolvido por Bruno Emanuel</span>
	</div>
</body>
</html>