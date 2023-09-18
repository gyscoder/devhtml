<?php
    require("conect.php");

    if(isset($_POST["email"]) && isset($_POST["senha"]) && $conexao != null){
        $query = $conexao->prepare("SELECT * FROM login WHERE email= ? AND password = ?");
        $query->execute(array($_POST["email"], $_POST["senha"]));

        if($query->rowCount()){
            echo "<h1 style='color:blue;'> existe </h1>";
            $usuario = $query->fetchAll(PDO::FETCH_ASSOC)[0];
            session_start();
            $_SESSION["USUARIO"] = array($usuario["name"], $usuario["adm"]);

            echo "<script> window.location = '../dashboard.php' </script>";
        }else{
            echo "<script> window.location = '../login.html' </script>";

        }
    }else{
        echo "<script> window.location = '../login.html' </script>";
    }
?>