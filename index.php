<?php

include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nickname = $_POST["nickname"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $discord = $_POST["discord"];
    $cidade = $_POST["cidade"];
    $plataforma = $_POST["plataforma"];
    $jogo = $_POST["jogo"];

    $sql = "INSERT INTO jogadores
    (nickname, nome, email, telefone, discord, cidade, plataforma, jogo)
    VALUES
    ('$nickname', '$nome', '$email', '$telefone', '$discord', '$cidade', '$plataforma', '$jogo')";
    if ($conexao->query($sql) === TRUE) {
        $mensagem = "Inscrição realizada com sucesso!";
    } else {
        $mensagem = "Erro ao cadastrar: " . $conexao->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Copa Arena</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Copa Arena</h1>
    <h2>Inscrição de Jogadores</h2>

    <?php
    if (isset($mensagem)) {
        echo $mensagem;
    }
    ?>

    <form action="index.php" method="POST">
        Nickname:<br>
        <input type="text" name="nickname" required>
        <br><br>

        Nome completo:<br>
        <input type="text" name="nome" required>
        <br><br>

        E-mail:<br>
        <input type="email" name="email" required>
        <br><br>

        Telefone:<br>
        <input type="text" name="telefone" required>
        <br><br>

        Discord:<br>
        <input type="text" name="discord" required>
        <br><br>

        Cidade:<br>
        <input type="text" name="cidade" required>
        <br><br>

        Plataforma:<br>
        <select name="plataforma" required>
            <option value="">Selecione</option>
            <option value="PC">PC</option>
            <option value="PlayStation">PlayStation</option>
            <option value="Xbox">Xbox</option>
            <option value="Mobile">Mobile</option>
        </select>
        <br><br>

        Jogo:<br>
        <input type="text" name="jogo" required>
        <br><br>

        <input type="submit" value="Realizar Inscrição">
    </form>
    <br>
    <a href="jogadores.php">Ver jogadores inscritos</a>

</body>
</html>
