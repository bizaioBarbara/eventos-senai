<?php 

require_once __DIR__ ."/init.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

if($_POST['titulo'] == ""){
    header("Location: cadastro.php?erro=0 ");
    exit;
}
if($_POST['descricao'] == ""){
    header("Location: cadastro.php?erro=0 ");
    exit;
}
if($_POST['area'] == ""){
    header("Location: cadastro.php?erro=0 ");
    exit;
}
if($_POST['data'] == ""){
    header("Location: cadastro.php?erro=0 ");
    exit;
}
if($_POST['inicio'] == ""){
    header("Location: cadastro.php?erro=0 ");
    exit;
}
if($_POST['fim'] == ""){
    header("Location: cadastro.php?erro=0 ");
    exit;
}
if($_POST['local'] == ""){
    header("Location: cadastro.php?erro=0 ");
    exit;
}
if($_POST['responsavel'] == ""){
    header("Location: cadastro.php?erro=0 ");
    exit;
}

$_SESSION['eventos'][$_SESSION['proximo_id']];
header("Location: index.php");

}
?> 