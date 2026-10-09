<?php
require_once __DIR__ . (/init.php);
session_start();

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id || $id <= 0) {
    header('Location: index.php');
    exit;
}

if (!isset($_SESSION['eventos'])) {
    $_SESSION['eventos'] = [];
}

$evento = null;
foreach ($_SESSION['eventos'] as $item) {
    if ($item['id'] == $id) {
        $evento = $item;
        break;
    }
}
if ($evento === null) {
    header('Location: index.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    if (
        isset($_POST['confirmar']) &&
        $_POST['confirmar'] === 'sim' &&
        isset($_POST['id']) &&
        filter_var($_POST['id'], FILTER_VALIDATE_INT) == $id
    ) {
        foreach ($_SESSION['eventos'] as $chave => $item) {
            if ($item['id'] == $id) {
                unset($_SESSION['eventos'][$chave]);
                break;
            }
        }

        $_SESSION['eventos'] = array_values($_SESSION['eventos']);
    }
    header('Location: index.php');
    exit;
}
?>









<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover evento</title>
</head>
<body>

    <h1>Remover evento</h1>

    <p>Tem certeza de que deseja remover esse evento?</p>

    <h2>
        <?= htmlspecialchars($evento['nome'] ?? 'Sem nome', ENT_QUOTES, 'UTF-8') ?>
    </h2>

    <p>
        <strong>Data:</strong>
        <?= htmlspecialchars($evento['data'] ?? '', ENT_QUOTES, 'UTF-8') ?>
    </p>

    <p>
        <strong>Descrição:</strong>
        <?= htmlspecialchars($evento['descricao'] ?? '', ENT_QUOTES, 'UTF-8') ?>
    </p>

    <form method="POST" action="remocao.php?id=<?= (int) $id ?>">
        <input type="hidden" name="id" value="<?= (int) $id ?>">

        <button type="submit" name="confirmar" value="sim">
            Confirmar remoção
        </button>

        <button type="submit" name="confirmar" value="nao">
            Cancelar
        </button>
    </form>

</body>
</html>
