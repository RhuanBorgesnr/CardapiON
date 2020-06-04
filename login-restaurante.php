<!DOCTYPE html>
<html lang="pt-br">
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/login.css">
		<link rel="shortcut icon" href="logo_transparent.png" type="image/x-png">
		<link rel="stylesheet" href="css/sweetalert2/dist/sweetalert2.min.css">
        <script src="css/sweetalert2/dist/sweetalert2.min.js"></script>
		<title>Login Restaurante - CardapiON</title>
	</head>
	<body>
	
	<div id="background">
			<img id="logo" src="logo.png" srcset="logo.png 1x, logo@2x.png 2x">
			<svg class="email-box">
				<rect fill="rgba(255,255,255,1)" stroke="rgba(240,56,97,1)" stroke-width="3px" stroke-linejoin="round" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="email-box" rx="30" ry="30" x="0" y="0" width="676" height="60">
				</rect>
			</svg>
			<svg class="password-box">
				<rect fill="rgba(255,255,255,1)" stroke="rgba(240,56,97,1)" stroke-width="3px" stroke-linejoin="round" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="password-box" rx="30" ry="30" x="0" y="0" width="676" height="60">
				</rect>
			</svg>
			<svg class="login-box">
				<rect fill="rgba(240,56,97,1)" stroke="rgba(240,56,97,1)" stroke-width="3px" stroke-linejoin="round" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="login-box" rx="23.5" ry="23.5" x="0" y="0" width="311" height="47">
				</rect>
			</svg>
            <svg class="seta" viewBox="6 6 14.474 15.061">
		        <path fill="rgba(240,56,112,1)" id="seta" d="M 20.47400093078613 12.58926963806152 L 9.464715003967285 12.58926963806152 L 14.52157020568848 7.327267646789551 L 13.23700141906738 6 L 6.000000476837158 13.53059387207031 L 13.23700141906738 21.06118774414063 L 14.51252269744873 19.73391914367676 L 9.464715003967285 14.4719181060791 L 20.47400093078613 14.4719181060791 L 20.47400093078613 12.58926963806152 Z">
		        </path>
            </svg>
            
			<form class="#" action="rest-login.php" method="POST">
			
				<div class="card-email">
					<input type="email" name="email" placeholder="E-mail">
				</div>
				<div class="card-password">
					<input type="password" name="senha" placeholder="Senha">
				</div>
			
				<div class="card-login">
					<button type="submit" name="submit">Login</button>
				</div>
			</form>

			<div id="recovertxt">
				<a class="fontesenhatxt" href="esqueceuasenha.php">Esqueceu sua senha?</a>
				<p1> · </p1>
				<a class="fontecadastrotxt" href="cadastrar-restaurante.php">Efetuar Cadastro no CardapiON</a>
			</div>

			<div id="backtxt">
				<a class="fontevoltartxt" href="index.html">Voltar</a>
			</div>
	</div>
	<?php				
			if(!isset($_GET['login'])) {
				exit();
			} else {
				$loginCheck = $_GET['login'];

				if($loginCheck == "empty") {
					function alerta($type, $title, $mensagem){
						echo "<script type='text/javascript'>
						Swal.fire({
							icon: 'error',
							type: '$type',
							title: '$title',
							text: '$mensagem',
							confirmButtonText: 'Tentar Novamente',
						});
						</script>";
					}
					alerta("error", "Erro ao Fazer Login!", "Preencha todos os campos!");
                    exit();
				} else if ($loginCheck == "wrongpassword") {
					function alerta($type, $title, $mensagem){
						echo "<script type='text/javascript'>
						Swal.fire({
							icon: 'error',
							type: '$type',
							title: '$title',
							text: '$mensagem',
							confirmButtonText: 'Tentar Novamente',
						});
						</script>";
					}
					alerta("error", "Erro ao Fazer Login!", "Email ou senha inválidos!");
                    exit();
				} else if ($loginCheck == "success") {
					header("Location: painel-restaurante.php");
                    exit();
				}
			}
        ?>
</body>
</html>