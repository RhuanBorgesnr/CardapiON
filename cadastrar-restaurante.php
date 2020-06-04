<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/restaurantsignup.css">
		<link rel="shortcut icon" href="logo_transparent.png" type="image/x-png">
		<link rel="stylesheet" href="css/sweetalert2/dist/sweetalert2.min.css">
        <script src="css/sweetalert2/dist/sweetalert2.min.js"></script>
		<title>Solicitar Acesso - Restaurante</title>
	</head>
	<body>
		<div id="background">
			<img id="logo" src="logo.png" srcset="logo.png 1x, logo@2x.png 2x">
			<svg class="name-box">
				<rect fill="rgba(255,255,255,1)" stroke="rgba(240,56,97,1)" stroke-width="3px" stroke-linejoin="round" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="name-box" rx="30" ry="30" x="0" y="0" width="676" height="60">
				</rect>
			</svg>
			<svg class="owner-box">
				<rect fill="rgba(255,255,255,1)" stroke="rgba(240,56,97,1)" stroke-width="3px" stroke-linejoin="round" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="owner-box" rx="30" ry="30" x="0" y="0" width="676" height="60">
				</rect>
			</svg>
			<svg class="cnpj-box">
				<rect fill="rgba(255,255,255,1)" stroke="rgba(240,56,97,1)" stroke-width="3px" stroke-linejoin="round" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="cnpj-box" rx="30" ry="30" x="0" y="0" width="676" height="60">
				</rect>
			</svg>
			<svg class="phone-box">
				<rect fill="rgba(255,255,255,1)" stroke="rgba(240,56,97,1)" stroke-width="3px" stroke-linejoin="round" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="phone-box" rx="30" ry="30" x="0" y="0" width="676" height="60">
				</rect>
			</svg>
			<svg class="email-box">
				<rect fill="rgba(255,255,255,1)" stroke="rgba(240,56,97,1)" stroke-width="3px" stroke-linejoin="round" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="email-box" rx="30" ry="30" x="0" y="0" width="676" height="60">
				</rect>
			</svg>
			<svg class="cep-box">
				<rect fill="rgba(255,255,255,1)" stroke="rgba(240,56,97,1)" stroke-width="3px" stroke-linejoin="round" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="cep-box" rx="30" ry="30" x="0" y="0" width="676" height="60">
				</rect>
			</svg>
			<svg class="password-box">
				<rect fill="rgba(255,255,255,1)" stroke="rgba(240,56,97,1)" stroke-width="3px" stroke-linejoin="round" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="password-box" rx="30" ry="30" x="0" y="0" width="676" height="60">
				</rect>
			</svg>
			<svg class="confirm-box">
				<rect fill="rgba(255,255,255,1)" stroke="rgba(240,56,97,1)" stroke-width="3px" stroke-linejoin="round" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="confirm-box" rx="30" ry="30" x="0" y="0" width="676" height="60">
				</rect>
			</svg>
			<svg class="signup-box">
				<rect fill="rgba(240,56,97,1)" stroke="rgba(240,56,97,1)" stroke-width="3px" stroke-linejoin="round" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="signup-box" rx="23.5" ry="23.5" x="0" y="0" width="311" height="47">
				</rect>
			</svg>
			<svg class="seta" viewBox="6 6 14.474 15.061">
				<path fill="rgba(240,56,112,1)" id="seta" d="M 20.47400093078613 12.58926963806152 L 9.464715003967285 12.58926963806152 L 14.52157020568848 7.327267646789551 L 13.23700141906738 6 L 6.000000476837158 13.53059387207031 L 13.23700141906738 21.06118774414063 L 14.51252269744873 19.73391914367676 L 9.464715003967285 14.4719181060791 L 20.47400093078613 14.4719181060791 L 20.47400093078613 12.58926963806152 Z">
				</path>
			</svg>

			<form action="inserir-restaurante.php" method="POST">
				<div id="signup-txt">
					<span>Solicitar Acesso - Restaurante</span>
				</div>
				<div class="card-nome">
					<input type="text" name="nome" placeholder="Nome do Restaurante">
				</div>
				<div class="card-proprietario">
					<input type="text" name="proprietario" placeholder="Proprietário">
				</div>
				<div class="card-cnpj">
					<input type="text" name="cnpj" placeholder="CNPJ" maxlength="14">
				</div>
				<div class="card-telefone">
					<input type="text" name="telefone" placeholder="Telefone" maxlength="11">
				</div>
				<div class="card-email">
					<input type="email" name="email" placeholder="E-mail">
				</div>
				<div class="card-cep">
					<input type="text" name="cep" placeholder="CEP" maxlength="8">
				</div>
				<div class="card-senha">
					<input type="password" name="senha" placeholder="Senha">
				</div>
				<div class="card-confirmarsenha">
					<input type="password" name="cSenha" placeholder="Confirmar Senha">
				</div>
				<div class="card-request">
					<button type="submit" name="submit">Cadastrar</button>
				</div>
			</form>

			<div id="backtxt">
				<a class="fontevoltartxt" href="login-restaurante.php">Voltar</a>
			</div>
		</div>
		<?php				
			if(!isset($_GET['signup'])) {
				exit();
			} else {
				$signupCheck = $_GET['signup'];

				if($signupCheck == "empty") {
					function alerta($type, $title, $mensagem){
						echo "<script type='text/javascript'>
						Swal.fire({
							icon: 'error',
							type: '$type',
							title: '$title',
							text: '$mensagem',
							confirmButtonText: 'Voltar',
						});
						</script>";
					}
					alerta("error", "Ocorreu um Erro!", "Todos os campos devem ser preenchidos!");
                    exit();
				} else if ($signupCheck == "char") {
					function alerta($type, $title, $mensagem){
						echo "<script type='text/javascript'>
						Swal.fire({
							icon: 'error',
							type: '$type',
							title: '$title',
							text: '$mensagem',
							confirmButtonText: 'Voltar',
						});
						</script>";
					}
					alerta("error", "Ocorreu um Erro!", "Caracteres inválidos!");
                    exit();
				} else if ($signupCheck == "email") {
					function alerta($type, $title, $mensagem){
						echo "<script type='text/javascript'>
						Swal.fire({
							icon: 'error',
							type: '$type',
							title: '$title',
							text: '$mensagem',
							confirmButtonText: 'Voltar',
						});
						</script>";
					}
					alerta("error", "Ocorreu um Erro!", "Email Inválido!");
					exit();
				} else if ($signupCheck == "password") {
					function alerta($type, $title, $mensagem){
						echo "<script type='text/javascript'>
						Swal.fire({
							icon: 'error',
							type: '$type',
							title: '$title',
							text: '$mensagem',
							confirmButtonText: 'Voltar',
						});
						</script>";
					}
					alerta("error", "Ocorreu um Erro!", "As senhas não coincidem!");
                    exit();
				} else if ($signupCheck == "success") {
					function alerta($type, $title, $mensagem){
						echo "<script type='text/javascript'>
						Swal.fire({
							icon: 'success',
							type: '$type',
							title: '$title',
							text: '$mensagem',
							confirmButtonText: 'Prosseguir',
						});
						</script>";
					}
					alerta("success", "Cadastro efetuado com sucesso!", "Clique no Botão para Efetuar o Login");
                    exit();
				}
			}
        ?>
	</body>
</html>