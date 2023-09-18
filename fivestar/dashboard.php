<?php
session_start();
require "conn.php";
?>

<html lang="pt-br">
    <head>
        <title>Dashboard    </title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/menu.css" />
    </head>
<body>
    <h1>Dashboard</h1>
        <table>
            <thead>
                <tr>
                    <td>Primeiro nome: </td>
                    <td>Segundo Nome: </td>
                    <td>Número: </td>
                    <td>Aceita disparo?: </td>
                    <td>Ligação foi atendida?: </td>
                    <td>Quem registrou: </td>
                    <td>Cidade: </td>

                </tr>
            </thead>
            <tbody>
                <?php
                    $query = $conexao->prepare("SELECT (first_name, last_name, number_box_1598501690, radio_1598501697, radio_1598502190797, input_box_1598504582, cidade) FROM wp_users");
                    $query->execute();

                    $usuario = $query->fetchAll(PDO::FETCH_ASSOC);

                    for ($i = 0; $i < sizeof($usuario); $i++):
                        $usuarioAtual = $usuario[$i];
                ?>
                <tr>
                    <td><?php echo $usuarioAtual["first_name"]; ?> </td>
                    <td><?php echo $usuarioAtual["last_name"]; ?> </td>
                    <td><?php echo $usuarioAtual["number_box_1598501690"]; ?> </td>
                    <td><?php echo $usuarioAtual["radio_1598501697"]; ?> </td>
                    <td><?php echo $usuarioAtual["radio_1598502190797"]; ?> </td>
                    <td><?php echo $usuarioAtual["input_box_1598504582"]; ?> </td>
                    <td><?php echo $usuarioAtual["cidade"]; ?> </td>



                </tr>
                <?php endfor;?>
            </tbody>
        </table>
    <?php endif;?>
    <a href="action/logout.php">Sair</a>
</body>
</html>