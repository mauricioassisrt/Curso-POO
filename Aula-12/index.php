<?php
require_once 'Ave.php';
require_once 'Mamifero.php';
require_once 'Peixe.php';
require_once 'Reptil.php';
require_once 'Canguru.php';
require_once 'Cachorro.php';
?>
<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animais</title>
</head>
<body>
<pre>
  <?php

  $m = new Mamifero();
  $r = new Reptil();
  $p = new Peixe();
  $a = new Ave();
  $c = new Canguru();
  $k = new Cachorro();

  $m->setPeso(3.4);
  $m->setIdade(53);
  $m->setMembros(4);
  $m->locomover();
  $m->alimentar();
  $m->emitirSom();

  $p->setCorEscama("Azul");
  $p->setMembros(0);
  $p->setIdade(5);
  $p->setPeso(50);
  $p->emitirSom();
  $p->locomover();
  $p->alimentar();

  $c->setPeso(45);
  $c->setIdade(2);
  $c->setMembros(4);
  $c->setCorPelo("marrom");
  $c->locomover();
  $c->alimentar();
  $c->emitirSom();

  $k->setCorPelo("Amarelo");
  $k->setIdade(2);
  $k->setMembros(5);
  $k->setPeso(50);
  $k->locomover();
  $k->alimentar();
  $k->emitirSom();

  print_r($k);
  print_r($c);
  print_r($p);
  print_r($m);
  ?>

</pre>

</body>
</html>