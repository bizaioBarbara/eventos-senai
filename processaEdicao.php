<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = $_POST['id'];
        $eventoAlterado = $_POST;

        $_SESSION['eventos'][$id] = $_POST;
        header("Location: index.php");
        exit;
    }

?>
