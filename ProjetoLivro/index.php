<?php
require_once 'Pessoa.php';
require_once 'Livro.php';
?>
<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessoa-livro</title>
</head>
<body>
<pre>
    <?php
    $p[0] = new Pessoa("Pedro ", 22, "M");

    $p[1] = new Pessoa("maria ", 21, "F");

    $l[0] = new Livro("Php com poo ", "Maria da silva", 50, $p[0]);

    $l[1] = new Livro("Php basico ", "Maria da silva", 500, $p[0]);

    $l[2] = new Livro("Php avançado ", "Maria da silva", 800, $p[1]);

    $l[0]->abrir();
    $l[0]->folhear(60);
    $l[0]->avancarPagina();
    $l[0]->voltarPagina();
    $l[0]->detalhes();
    $l[1]->detalhes();
    $l[2]->detalhes();
    ?>
</pre>


</body>
</html>