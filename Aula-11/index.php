<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessoas</title>
</head>
<body>

    <pre>
           <?php
           require_once 'Visitante.php';
           require_once 'Aluno.php';
           require_once 'Bolsista.php';
           //           $v1 = new Visitante();
           //           $v1->setNome("Joventino");
           //           $v1->setSexo("M");
           //           $v1->setIdade(33);

           //           $a1 = new Aluno();
           //           $a1->setSexo("M");
           //           $a1->setIdade(12);
           //           $a1->setNome("Marcois");
           //           $a1->setCurso('Info');
           //           $a1->setMatricula(124);
           //           $a1->pagarMensalidade();
           $b1 = new Bolsista();

           $b1->setNome("MARIA");
           $b1->setMatricula(12453242);
           $b1->setCurso("ING");
           $b1->setIdade(14);
           $b1->setSexo("F");
           $b1->setBolsa("BOLSISTA");
           $b1->pagarMensalidade();
           print_r($b1);
           ?>
    </pre>

</body>
</html>