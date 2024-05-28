<?php
$pastaDestino = "/uploads/";
var_dump($_FILES);

var_dump($_FILES['arquivo']['size']);
// verificar se o tamanho do arquivo é maior que 2 MB
if ($_FILES['arquivo']['size'] > 2000000) {
    echo "O tamanho do arquivo é maior que o limite permitido. Limite máximo: 2 MB.";
    die();
}

// verificar se o arquivo é uma imagem
//strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION))
//var_dump($_FILES['arquivo']['name']);
var_dump(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));








/*
// pegamos o nome do arquivo
$nomeArquivo = $_FILES['arquivo']['name'];

var_dump($_FILES['arquivo']);

// verificar se o arquivo já existe
if (file_exists(__DIR__ . $pastaDestino . $nomeArquivo)) {
    echo "Arquivo já existe";
    exit;
}
//var_dump(__DIR__ . $pastaDestino . $nomeArquivo);

var_dump(strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION)));
$extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
if ($extensao != "jpg" && $extensao != "png" 
    && $extensao != "jpeg" && $extensao != "gif") {
    echo "O arquivo não é uma imagem";
    exit;
}*/