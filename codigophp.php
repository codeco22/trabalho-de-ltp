<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior ou Menor de Idade</title>
    <link rel="stylesheet" href="estilização.css">
</head>
<body>
    
</body>
</html>

<?php

require "listadasidade.php";

$maiordeidade=0;
$menordeidade=0;

$marcou=$_POST["idade"];

foreach ($nomesidades as $nome => $idade) {
    if ($idade >= 18) {
        $maiordeidade++;
    } else {
        $menordeidade++;
    }
}

if ($marcou == "maiordeidade") {
    echo "Quantidade de pessoas maiores de idade é $maiordeidade";
} else if ($marcou == "menordeidade") {
    echo "Quantidade de pessoas menores de idade é $menordeidade";
} else {
    echo "Quantidade de pessoas maiores de idade é $maiordeidade e menores de idade é $menordeidade";
}

?>
