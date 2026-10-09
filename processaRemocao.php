<?php

require_once __DIR__ . "/init.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $eventoAtual = $_POST;
    unset($_SESSION['eventos'][$id]);
    header("Location: index.php");
    exit();
    }


?>
