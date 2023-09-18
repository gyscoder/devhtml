<?php
    $server = '127.0.0.1';
    $user = 'root';
    $passwd = '';
    $banco = 'five';

    try{
        $conexao = new PDO("mysql:host=$server;dbname=$banco", $user, $passwd);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $erro){ 
        echo "<h1> [+] Acho que algo deu errado [+] </h1>";
        echo "<p> [+] Segue o erro: {$erro->getMessage()} [+]</p>";
        $conexao = null;
    }
?>