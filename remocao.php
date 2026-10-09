<?php
    require_once __DIR__ . "/init.php";

    $eventoDetectada = false; 
    $eventoAtual = null;

    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])){
        $id = $_GET['id'];
        $eventoDetectada = true;
        $eventoAtual = $_SESSION['eventos'][$id]; 
    }
?>


<html>
<head>
    <title>Remoção de Evento</title>
</head>
<body>
        <?php require_once __DIR__ . "/nav.php"; ?>
        <br>
        <br>

        <ul>
        <?php 
            foreach($_SESSION['eventos'] as $chave => $evento){
                print "
                    <li>
                        <a href='remocao.php?id={$chave}'>   
                        {$evento['titulo']}
                        </a>
                    </li>
                ";
            }
        ?>
        </ul>

        <?php if($eventoDetectada): ?>
        <center><form action="processaRemocao.php" method="POST">
            <input type="text" name="id" id="id"
            value="<?= $_GET['id'] ?>"
            hidden
            ></center>
            <br>
            <br>
        <button type="submit">Deletar Sessão</button>
        <?php else: ?>
        <?php endif ?>

<div class="pula-linhas2"></div>

<header>
    </nav>
</header>
    </body>
</html>
