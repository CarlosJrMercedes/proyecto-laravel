<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H3>Estas son las categoria: Accesorios</H3>
    <br>
    <ul>
        <li>
            <a href="<?php echo route('index')?>">Index</a>
        </li>
        <li>
            <a href="<?php echo route('accesorios')?>">Accesorios</a>
        </li>
        <li>
            <a href="<?php echo route('hogar')?>">Hogar</a>
        </li>
        <li>
            <a href="<?php echo route('camaras')?>">Camaras</a>
        </li>
        <li>
            <a href="<?php echo route('impresoras')?>">Impresoras</a>
        </li>
    </ul>
</body>
</html>