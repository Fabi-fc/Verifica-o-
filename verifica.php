<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = intval($_POST["idade"]);
    
    if ($idade >= 18) {
        echo "<h2>Cadastro permitido! Você tem $idade anos.</h2>";
    } else {
        echo "<h2>Cadastro não permitido! Você deve ter pelo menos 18 anos para se cadastrar.</h2>";
    }
}
?>
</body>
</html>