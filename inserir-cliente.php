<?php 

	if (isset($_POST['submit'])) { 
		include_once 'conexao.php';

		$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
		$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
		$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
		$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
		$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
		$cSenha = trim($_POST['cSenha']);

		if (empty($nome) || empty($email) || empty($telefone) || empty($cpf) || empty($senha) || empty($cSenha)) {
			header("Location: ../cadastrar-cliente.php?signup=empty");
			exit();
		} else if (!preg_match("/^[a-zA-ZÀ-ú\s]*$/", $nome)) {
			header("Location: ../cadastrar-cliente.php?signup=char");
			exit();
		} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../cadastrar-cliente.php?signup=email");
			exit();
		} else if ($senha != $cSenha) {
			header("Location: ../cadastrar-cliente.php?signup=password");
			exit();	
		} else {
			$hash = password_hash($senha, PASSWORD_BCRYPT);

			$sql = "INSERT INTO usuario (nome, email, telefone, cpf, senha) values ('$nome', '$email', '$telefone', '$cpf', '$hash')";
			
			$res = $conexao -> query($sql);

			header("Location: ../cadastrar-cliente.php?signup=success");
			exit();
		}
	} else {
		header("Location: ../cadastrar-cliente.php");
	}
		
	



