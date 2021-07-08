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
    <pre>

    <?php
    $lut = array();

    $lut[0] = new Lutador("Pretty Boy", "França", 20, 1.46, 68.9, 2, 3, 5);
    $lut[1] = new Lutador("Putscript", "brasil", 29, 1.66, 57.9, 12, 5, 3);
    $lut[2] = new Lutador("Snapshadow", "USA", 32, 1.90, 75.9, 44, 3, 54);
    $lut[3] = new Lutador("Dead Code", "Australia", 37, 1.70, 90.9, 22, 3, 15);
    $lut[4] = new Lutador("Neardart", "Senegal", 23, 1.96, 102.9, 2, 3, 5);

//    foreach ($lut as $value) {
//        $value->apresentar();
//    }

    ?>
    </pre>
</body>
</html>