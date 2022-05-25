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
					<a href="cadastrar.php" class="caduser">Cadastrar novo contato</a>
					<a href="pesquisar.php" class="caduser">Pesquisar por nome</a>
					<table class="table table-dark table-striped"">
  					<thead>
    					<tr>
      						<th scope="col">ID</th>
   						    <th scope="col">Nome</th>
      						<th scope="col">Sobrenome</th>
      						<th scope="col">CPF</th>
      						<th scope="col">Email</th>
      						<th scope="col">Telefone 1</th>
      						<th scope="col">Telefone 2</th>
      						<th scope="col">Ações</th>
    					</tr>
  					</thead>
					<?php $contato = new Contato();
						$dados = $contato->consultaTodos();
						foreach ($dados as $value):
					?>
  					<tbody>
  						<tr>
      						<th scope="row"><?php echo $value['iduser'] ?></th>
      						<td><?php echo $value['nome'] ?></td>
     						<td><?php echo $value['sobrenome'] ?></td>
     					 	<td><?php echo $value['cpf'] ?></td>
     					 	<td><?php echo $value['email'] ?></td>
     					 	<td><?php echo $value['telefone1'] ?></td>
     					 	<td><?php echo $value['telefone2'] ?></td>
     					 	<td><a href="editar.php?id=<?php echo $value['iduser'] ?>" class="linktable">Editar </a> <a href="deletar.php?id=<?php echo $value['iduser'] ?>" class="linktable">Deletar</a></td>

    					</tr>
					<?php 
						endforeach;
					 ?>
					</tbody>
				</table>
																		
			
		</main>
<span class="rodapetxt">Desenvolvido por Bruno Emanuel</span>
	</div>
	
</body>
</html>