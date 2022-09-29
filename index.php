<?php
include 'php.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <form method="POST">
        <select name='vezes'>
            <option value="24">24 Vezes</option>
            <option value="36">36 Vezes</option>
            <option value="48">48 Vezes</option>
            <option value="60">60 Vezes</option>
        </select>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>