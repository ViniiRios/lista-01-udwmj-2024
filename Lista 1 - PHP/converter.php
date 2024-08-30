<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $celsius = $_POST['celsius'];
        $fahrenheit = ($celsius * 9/5) + 32;
        echo "<h2>$celsius °C é equivalente a $fahrenheit °F</h2>";
    } else {
        echo "<h2>Nenhuma temperatura foi enviada.</h2>";
    }
    ?>
</body>
</html>