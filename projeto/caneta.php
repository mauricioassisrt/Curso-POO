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


$c2 = new Caneta("BIC", "AZUL", 0.5);
//        $c2->setCor("Azul");
//        $c2->setModelo("PILOT");
//        $c2->setPonta(0.2);
//        $c2->setCarga(5);
//        $c2->setTampa(0);


print_r($c2);

?>
</body>

</html>