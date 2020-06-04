<?php
	if (isset($_POST['submit'])) { 
		include_once 'conexao.php';

		$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
		$proprietario = mysqli_real_escape_string($conexao, trim($_POST['proprietario']));
		$cnpj = mysqli_real_escape_string($conexao, trim($_POST['cnpj']));
		$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
		$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
		$cep = mysqli_real_escape_string($conexao, trim($_POST['cep']));
		$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
		$cSenha = trim($_POST['cSenha']);

		if (empty($nome) || empty($proprietario) || empty($cnpj) || empty($telefone) || empty($email) || empty($cep) || empty($senha) || empty($cSenha)) {
			header("Location: ../cadastrar-restaurante.php?signup=empty");
			exit();
		} else if (!preg_match("/^[a-zA-ZÀ-ú\s]*$/", $nome) || !preg_match("/^[a-zA-ZÀ-ú\s]*$/", $proprietario)) {
			header("Location: ../cadastrar-restaurante.php?signup=char");
			exit();
		} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../cadastrar-restaurante.php?signup=email");
			exit();
		} else if ($senha != $cSenha) {
			header("Location: ../cadastrar-restaurante.php?signup=password");
			exit();	
		} else {
			$hash = password_hash($senha, PASSWORD_BCRYPT);

			$sql = "INSERT INTO restaurante (nome, proprietario, cnpj, telefone, email, cep, senha) VALUES ('$nome', '$proprietario', '$cnpj', '$telefone', '$email', '$cep', '$hash')";
			
			$res = $conexao -> query($sql);

			header("Location: ../cadastrar-restaurante.php?signup=success");
			exit();
		}
	} else {
		header("Location: ../cadastrar-restaurante.php");
	}
		