<?php

    require_once __DIR__ . "/init.php";
    require_once __DIR__ . "/nav.php";

    $eventoId = $_GET['id'];
    $eventoAtual = $_SESSION['eventos'][$eventoId]
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detalhes</title>
</head>
<body>

    <div>
        <hr>
    </div>

    <h1>Eventos SENAI⬇️</h1>

    <table border="1px">
        <tr>
            <td>Titulo:</td>
            <td>Descrição:</td>
            <td>Área do evento:</td>
            <td>Data:</td>
            <td>Horário de ínicio:</td>
            <td>Horário de termino:</td>
            <td>Local de encontro:</td>
            <td>Responsável pelo evento:</td>
        </tr>
        <tr>
            <td><?= $eventoAtual['titulo'] ?></td>
            <td><?= $eventoAtual['descricao'] ?></td>
            <td><?= $eventoAtual['area'] ?></td>
            <td><?= $eventoAtual['data'] ?></td>
            <td><?= $eventoAtual['inicio'] ?></td>
            <td><?= $eventoAtual['fim'] ?></td>
            <td><?= $eventoAtual['local'] ?></td>
            <td><?= $eventoAtual['responsavel'] ?></td>
        </tr>
    </table>
    
</body>
</html>
