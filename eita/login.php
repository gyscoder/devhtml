<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>Assuntos Diversos</title>
</head>

<body>
    <div id="main" class="container"></div>
    <form action="actions/login.php" method="POST" id="ml-login">
        <h2><span class="entypo-login"></span> Login</h2>
        <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div>
        <h2 style="padding: 0; color: red; font-size: 15px"><span class="entypo-login"></span> senha ou usuário inválidos</h2>
        </div>
        <?php
        endif; 
        unset($_SESSION['nao_autenticado']);
        ?>
        <button class="submit"><span class="entypo-lock"></span></button>
        <span class="entypo-user inputUserIcon"></span>
        <input type="text" class="user" name="user" placeholder="user" />
        <span class="entypo-key inputPassIcon"></span>
        <input type="password" class="pass" name="pass" placeholder="pass" />
    </form>
</body>

</html>