<?php
    require_once __DIR__ . "/init.php";

    $eventoDetectado = false; //QUANDO TRUE SIGNIFICA QUE O USER SELECIONOU UMA NOTÍCIA
    $eventoAtual = null;

    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])){
        $id = $_GET['id'];
        $eventoDetectado = true;
        $eventoAtual = $_SESSION['eventos'][$id]; 
    }
?>

<html>
    <head></head>
    <body>
        <h1>NotiSenai - Cadastro</h1>


        <ul>
        <?php 
            foreach($_SESSION['eventos'] as $chave => $eventos){
                print "
                    <li>
                        <a href='edicao.php?id={$chave}'>
                        {$eventos['titulo']}
                        </a>
                    </li>
                ";
            }
        ?>
        </ul>

        <?php if($eventoDetectado): ?>
        <form action="processaEdicao.php" method="POST">
            <input type="text" name="id" id="id"
            value="<?= $_GET['id'] ?>"
            hidden
        >

            <label for="titulo">Titulo: </label>
            <input type="text" name="titulo" id="titulo"
            value="<?= $eventoAtual['titulo'] ?>" 
            >

            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" id="descricao"
            value="<?= $eventoAtual['descricao'] ?>" 
            >
            
            <label for="area">Area do Evento:</label>
            <input type="text" name="area" id="area"
            value="<?= $eventoAtual['area'] ?>" 
            >

             <label for="data">Data: </label>
            <input type="text" name="data" id="data"
            value="<?= $eventoAtual['data'] ?>" 
            >

            <label for="inicio">Horario de Inicio:</label>
            <input type="inicio" name="inicio" id="inicio"
            value="<?= $eventoAtual['inicio'] ?>" 
            >

            <label for="fim">Horario de Termino:</label>
            <input type="fim" name="fim" id="fim"
            value="<?= $eventoAtual['fim'] ?>" 
            >

            <label for="local">Local de Encontro:</label>
            <input type="local" name="local" id="local"
            value="<?= $eventoAtual['local'] ?>" 
            >

            <label for="responsavel">Responsavel pelo Evento::</label>
            <input type="responsavel" name="responsavel" id="responsavel"
            value="<?= $eventoAtual['responsavel'] ?>" 
            >

            <button type="submit">Cadastrar</button>
        </form>
        <?php else: ?>
            <p>Selecione uma das notícias acima!</p>
        <?php endif ?>

    </body>
</html>
