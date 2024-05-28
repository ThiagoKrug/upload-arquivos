<?php
$pastaDestino = "/uploads/";





/*// definiu a pasta de destino
$pastaDestino = "/uploads/";

// pegamos o nome do arquivo
$nomeArquivo = $_FILES['arquivo']['name'];

var_dump($_FILES['arquivo']);

// verificar se o arquivo já existe
if (file_exists(__DIR__ . $pastaDestino . $nomeArquivo)) {
    echo "Arquivo já existe";
    exit;
}
//var_dump(__DIR__ . $pastaDestino . $nomeArquivo);

if ($_FILES['arquivo']['size'] > 10000000) { // 10M
    echo "Arquivo muito grande";
    exit;
}

var_dump(strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION)));
$extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
if ($extensao != "jpg" && $extensao != "png" 
    && $extensao != "jpeg" && $extensao != "gif") {
    echo "O arquivo não é uma imagem";
    exit;
}*/