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
            <li>Cardápios
                <ul>
                    <li>Ver Cardápios</li>
                    <li>Buscar Cardápios</li>
                </ul>
            </li>
            <li>Meu Perfil
                <ul>
                    <li>Editar Dados</li>
                    <li>Alterar Foto</li>
                </ul>
            </li>
            <a href="sair.php"><li>Sair</li></a>
        </ul>
    </div>
</body>
</html>