<?php

require_once __DIR__ . "/init.php";
require_once __DIR__ . "/nav.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}elseif(isset($_POST['id'])){
    $id = $_POST['id'];
}else{
    $id = null;
}

if($id == null || !isset($_SESSION['eventos']['id'])){
    header("Location: index.php");
    exit;
}

$erro = "";

if($_SERVER['REQUEST_METHOD'] == $_POST){
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $area = $_POST['area'];
    $data = $_POST['data'];
    $inicio = $_POST['inicio'];
    $fim = $_POST['fim'];
    $local = $_POST['local'];
    $responsavel = $_POST['responsavel'];

    if(empty($titulo) || empty($descricao) || empty($area) || empty($data) || empty($inicio) || empty($fim) || empty($local) || empty($responsavel)){

    $erro = "Preencha todos os campos.";

    }elseif($fim <= $inicio){

    $erro = "O horário de término deve ser maior ou igual ao inicial.";

    }else{
        $_SESSION['eventos'][$id] = [
            'id' => $id,
            'titulo' => $titulo,
            'descricao' => $descricao,
            'area' => $area,
            'data' => $data,
            'inicio' => $incio,
            'fim' => $fim,
            'local' => $local,
            'responsavel' => $responsavel,
        ];

        header("Location: index.php");
        exit;

    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição Evento - SENAI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Editar Evento <?=$evento['id']?></h2>

        <?php if($erro = ""): ?>
            <div class="mensagem-erro">
                <?= $erro ?>
            </div>
            <?php endif ?>
    </div>

    <form method="$_POST" action="/edicao.php">
        <input type="text" name="id" value="<?= $evento['id'] ?>">

        <div class="campo">
            <label for="Título do Evento: "></label>
            <input type="text" name="titulo" id="<?=htmlspecialchars($evento['titulo'])?>">
        </div>
        <div class="campo">
            <label for="Descrição: "></label>
            <textarea name="descricao" rows="3"><?=htmlspecialchars($evento['descricao'])?></textarea>
        </div>
        <div class="campo">
            <label for="Área "></label>
            <input type="text" name="area" id="<?=htmlspecialchars($evento['area'])?>">
        </div>
        <div class="campo">
            <label for="Data: "></label>
            <input type="date" name="data" id="<?=htmlspecialchars($evento['data'])?>">
        </div>
        <div class="campo">
            <label for="Horário de Início: "></label>
            <input type="time" name="inicio" id="<?=htmlspecialchars($evento['inicio'])?>">
        </div>
        <div class="campo">
            <label for="Horário de Término: "></label>
            <input type="time" name="fim" id="<?=htmlspecialchars($evento['fim'])?>">
        </div>
        <div class="campo">
            <label for="Local: "></label>
            <input type="text" name="local" id="<?=htmlspecialchars($evento['local'])?>">
        </div>
        <div class="campo">
            <label for="Responsável: "></label>
            <input type="text" name="responsavel" id="<?=htmlspecialchars($evento['responsavel'])?>">
        </div>

        <button type="submit">Salvar Alterações</button>
        <a href="index.php">Cancelar</a>

    </form>

</body>
</html>
