<?php include_once 'Lutador.php' ?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LUTADOR</title>
</head>
<body>
<?php
$lut = new Lutador('asdasdad', '$nascionalidade', '$idade', '$altura', '$peso', '$categoria', '$vitorias',
    '$derrotas', '$empates');
$lut->apresentar();

?>
</body>
</html>