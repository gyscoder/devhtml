<?php
include('actions/verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="css/login.css">-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>Assuntos Diversos</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="nav navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- Navbar content -->
            <a class="navbar-brand" href="#">Navbar</a>
            <a class="navbar-brand"><?php echo $_SESSION['usuario'];?></a>
            <a class="navbar-brand" href="logout.php">sair</a>
            <button class="navbar-toggler" type="buttom" data-toggle="collapse" data-target="#navbarSite"><spam class="navbar-toggler-icon"></span></button>

        </nav>
    </div>
</body>

</html>