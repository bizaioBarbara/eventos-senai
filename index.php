<?php
    require_once __DIR__ . "/init.php";
    require_once __DIR__ . "/nav.php"

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

</head>
<body>

    <div>
        <hr>
    </div>

    <center><h1>Eventos SENAI⬇️</h1></center>

    <?php 
        foreach($_SESSION['eventos'] as $chave => $eventos){
            print "
            
                <h1>{$eventos['titulo']}</h1>
                <h3>Responsável pelo evento: {$eventos['responsavel']}</h3>
                <a href='detalhes.php?id={$chave}'>Saiba mais...</a>
            
            ";
        }
    ?>

</body>
</html>
