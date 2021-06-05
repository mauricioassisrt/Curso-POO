<!DOCTYPE html>
<?php require_once 'Model/Caneta.php'; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 2 </title>
</head>

<body>
    <?php
    $c1 = new Caneta;
    // $c1->cor = "Vermelha";
    // $c1->modelo = "BIC";
    // $c1->ponta = 1.2;
    // $c1->carga = 50;
    // $c1->destampar();
    // $c1->rabiscar();

    // $c2 = new Caneta;
    // $c2->cor = "Azul";
    // $c2->modelo = "PILOT";
    // $c2->ponta = 0.2;
    // $c2->carga = 5;
    // $c2->tampar();

    $c1->modelo = "BIC";
    print_r($c1);

    ?>
</body>

</html>