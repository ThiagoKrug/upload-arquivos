<?php
$conexao = mysqli_connect("localhost", "root", "", "upload-arquivos");
$sql = "SELECT * FROM arquivo";
$resultado = mysqli_query($conexao, $sql);
if ($resultado != false) {
    $arquivos = mysqli_fetch_all($resultado, MYSQLI_BOTH);
} else {
    echo "Erro ao executar comando SQL.";
    die();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Selecione o arquivo:
        <input type="file" name="arquivo"><br>
        <input type="submit" value="Enviar">
    </form>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>Arquivo</th>
                <th colspan="2">Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($arquivos as $arquivo) {
                echo "<tr><td>" . $arquivo['nome_arquivo'] . "</td>";
                echo "<td><a href='alterar.php?nome_arquivo=" .
                        $arquivo['nome_arquivo'] . "'>Alterar</td>";
                echo "<td><button>Excluir</button></td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>