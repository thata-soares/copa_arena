<?php

include "conexao.php";

$sql = "SELECT * FROM jogadores";
$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jogadores - Copa Arena</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Jogadores Inscritos - Copa Arena</h1>

    <?php
    while ($jogador = $resultado->fetch_assoc()) {
        echo $jogador["id"] . " - ";
        echo $jogador["nickname"] . " - ";
        echo $jogador["nome"] . " - ";
        echo $jogador["email"] . " - ";
        echo $jogador["telefone"] . " - ";
        echo $jogador["discord"] . " - ";
        echo $jogador["cidade"] . " - ";
        echo $jogador["plataforma"] . " - ";
        echo $jogador["jogo"] . "<br>";
    }
    ?>

    <br>
    <a href="index.php">Voltar ao formulário</a>

</body>
</html>

