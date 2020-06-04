<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/addmenu.css">
		<link rel="shortcut icon" href="logo_transparent.png" type="image/x-png">
		<title>Adicionar Cardápio</title>
	</head>
	<body>
		<div id="background">
			<img id="logo" src="logo.png" srcset="logo.png 1x, logo@2x.png 2x">
			<svg class="restaurantecategory-box">
				<rect fill="rgba(255,255,255,1)" stroke="rgba(240,56,97,1)" stroke-width="3px" stroke-linejoin="round" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="restaurantecategory-box" rx="30" ry="30" x="0" y="0" width="661" height="60">
				</rect>
			</svg>
			<svg class="proceed-box">
				<rect fill="rgba(240,56,97,1)" stroke="rgba(240,56,97,1)" stroke-width="3px" stroke-linejoin="round" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="proceed-box" rx="23.5" ry="23.5" x="0" y="0" width="280" height="47">
				</rect>
			</svg>
			<ul>
				<a href="painel-restaurante.php"><li>Home</li></a>
				<li>Cardápio
					<ul>
						<a href="criar-cardapio.php"><li>Criar Cardápio</li></a>
						<a href="editar-cardapio.php"><li>Editar Cardápio</li></a>
					</ul>
				</li>
				<li>Meu Restaurante
					<ul>
						<a href="editar-restaurante.php"><li>Editar Dados</li></a>
					</ul>
				</li>
				<a href="sair.php"><li>Sair</li></a>
       		</ul>
			<form action="" method="POST">
				<div id="addmenu-txt">
					<span>Criar Cardápio</span>
				</div>
				
				<div class="card-restaurantcategory">
					<input type="text" name="categoria" placeholder="Adicionar Categoria">
				</div>
				
				<div class="card-proceed">
					<button type="submit">Avançar</button>
				</div>
			</form>
		</div>
			

	</body>
</html>	