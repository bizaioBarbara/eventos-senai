<?php 

require_once __DIR__ ."/init.php";
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./cadastro.css'>
</head>

    <head>Cadastro</head>
    <body> 
    <center><h1>Cadastro de Evento SENAI</h1> 
    <form method="POST" action="validacaoC.php"> 

        <label>Título:</label> 
        <input type="text" name="titulo" required> 
        <br><br> 

        <label>Descrição:</label> 
        <input type="text" name="descricao" required> 
        <br><br> 

        <label>Área:</label> 
        <input type="text" name="area" required> 
        <br><br> 

        <label>Data:</label> 
        <input type="date" name="data" required> 
        <br><br> 

        <label>Início:</label> 
        <input type="time" name="inicio" required> 
        <br><br> 

        <label>Fim:</label> 
        <input type="time" name="fim" required> 
        <br><br> 

        <label>Local:</label> 
        <input type="text" name="local" required> 
        <br><br> 

        <label>Responsável:</label> 
        <input type="text" name="responsavel" required> 
        <br><br>

        <button type="submit" name="cadastrar">Cadastrar Evento</button> 
        <br>
    </form></center>
</body> 
</html> 
