<?php


 class Contato
 {
 	private $pdo;

 	function __construct()
 	{
 		$this->pdo = new PDO("mysql:dbname=contatosystem;host=localhost","root","");
 			
 	}

 	public function inserir($nome,$sobrenome = '',$cpf,$email,$telefone1,$telefone2 = ''){
    if($this->validaCPF($cpf)){
 		 if($this->existeEmail($email) == false && $this->existeCpf($cpf) == false){
 		     	$sql = "INSERT INTO contato (nome,sobrenome,cpf,email,telefone1,telefone2) VALUES (:nome,:sobrenome,:cpf,:email,:telefone1,:telefone2)";
 		     	$sql = $this->pdo->prepare($sql);
 		     	$sql->bindValue(":nome",$nome);
 		     	$sql->bindValue(":sobrenome",$nome);
 		     	$sql->bindValue(":cpf",$cpf);
 		     	$sql->bindValue(":email",$email);
 		     	$sql->bindValue(":telefone1",$telefone1);
 		     	$sql->bindValue(":telefone2",$telefone2);
 		     	$sql->execute();
 			    echo "Usuario Cadastrado com sucesso!";
 		}else{
 			echo "Email e CPF ja cadastrado em um contato !";
 		}
    }else{
        echo "CPF invalido por favor verificar !";
    }    
  }

 	public function consultaPorNome($nome){
 		$sql = "SELECT * FROM contato WHERE nome = :nome";
 		$sql= $this->pdo->prepare($sql);
 		$sql->bindValue(":nome",$nome);
 		$sql->execute();

 		if($sql->rowCount() > 0){
 			return $sql->fetchAll();
 		}else{
 			return array();
 		}
 	}

    public function editar($nome,$sobrenome = '',$email,$cpf,$telefone1,$telefone2 = ''){
        $sql = "UPDATE contato SET nome =:nome,sobrenome = :sobrenome; email = :email,cpf = :cpf,telefone1 = :telefone1, telefone2 = :telefone2 ";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":nome",$nome);
        $sql->bindValue(":sobrenome",$sobrenome);
        $sql->bindValue(":email",$email);
        $sql->bindValue(":cpf",$cpf);
        $sql->bindValue(":telefone1",$telefone1);
        $sql->bindValue(":telefone2",$telefone2);
        $sql->execute();
        echo "Usuario Alterado com sucesso !";
    }

 	public function consultaTodos(){
 		$sql = "SELECT * FROM contato";
 		$sql = $this->pdo->query($sql);
 		if($sql->rowCount() > 0){
 			return $sql->fetchAll();
 		}else{
 			return array();
 		}

 	}

 	public function excluir($id){
 		$sql = "DELETE FROM contato WHERE iduser=:id";
 		$sql = $this->pdo->prepare($sql);
 		$sql->bindValue(":id",$id);
 		$sql->execute();
 		echo "Usuario Excluido com sucesso";

 	}

    public function consultarPorId($id){
        $sql = "SELECT * FROM contato WHERE iduser = :id ";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id",$id);
        $sql->execute();
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            return $dado;
        }else{
            return '';
        }
    }


 	private function existeEmail($email){
 		$sql = "SELECT * FROM contato WHERE email = :email";
 		$sql = $this->pdo->prepare($sql);
 		$sql->bindValue(":email",$email);
 		$sql->execute();

 		if($sql->rowCount() > 0){
 			return true;
 		}else{
 			return false;
 		}
 	}

 	private function existeCpf($cpf){
 		$sql = "SELECT * FROM contato WHERE cpf = :cpf";
 		$sql = $this->pdo->prepare($sql);
 		$sql->bindValue(":cpf",$cpf);
 		$sql->execute();

 		if($sql->rowCount() > 0){
 			return true;
 		}else{
 			return false;
 		}
 	}

    private function validaCPF($cpf) {
 
          // Extrai somente os números
          $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
      
          // Verifica se foi informado todos os digitos corretamente
          if (strlen($cpf) != 11) {
                return false;
          }

         // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
         if (preg_match('/(\d)\1{10}/', $cpf)) {
             return false;
         }

    // Faz o calculo para validar o CPF
         for ($t = 9; $t < 11; $t++) {
                 for ($d = 0, $c = 0; $c < $t; $c++) {
                  $d += $cpf[$c] * (($t + 1) - $c);
                  }
                  $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;

    }

    
 } 


?>