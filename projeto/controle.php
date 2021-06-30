<?php
require_once 'Model/ControleRemoto.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Remoto </title>
</head>
<body>
<?php
$c = new ControleRemoto();
$c->desligar();

$c->abrirMenu();
$c->menosVolume();
?>
</body>
</html>