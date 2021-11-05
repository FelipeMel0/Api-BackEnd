<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Content-Type: application/json");

include('connection.php');
include('crud.php');

#Recupera o tipo de ação da requisição

$acao = $_REQUEST["acao"];

#Criação de rotas

#Rota do Read
if ($acao == "read") {
    
    read($conn);

}

#Rota do ReadId
if ($acao == "readId") {
    
    $cod_pessoa = $_REQUEST["cod_pessoa"];
    readId($cod_pessoa, $conn);

}

#Rota do Create
if($acao == "create"){

    $nome = $_REQUEST["nome"];
    $sobrenome = $_REQUEST["sobrenome"];
    $email = $_REQUEST["email"];
    $celular = $_REQUEST["celular"];
    $fotografia = $_REQUEST["fotografia"];

    create($nome, $sobrenome, $email, $celular, $fotografia, $conn);

}

#Rota do Update
if($acao == "update"){

    $cod_pessoa = $_REQUEST["cod_pessoa"];
    $nome = $_REQUEST["nome"];
    $sobrenome = $_REQUEST["sobrenome"];
    $email = $_REQUEST["email"];
    $celular = $_REQUEST["celular"];
    $fotografia = $_REQUEST["fotografia"];

    update($cod_pessoa,$nome, $sobrenome, $email, $celular, $fotografia, $conn);

}
