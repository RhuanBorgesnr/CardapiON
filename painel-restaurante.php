<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mainmenu.css">
    <link rel="shortcut icon" href="logo_transparent.png" type="image/x-png">
    <title>Home - CardapiON</title>
</head>
<body>
    <div id="background"> 
        <ul>
        <img id="logo" src="logo.png" srcset="logo.png 1x, logo@2x.png 2x">
            <li>Home</li>
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
    </div>
</svg>
</body>
</html>