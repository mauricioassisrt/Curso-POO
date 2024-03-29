<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faculdade</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->setNome("Pedro");
        $p1->setSexo("M");
        $p2->setNome("Maria");
        $p2->setSexo("F");
        $p3->setNome("Claudio");
        $p3->setSexo("M");
        $p4->setNome("Fabiana");
        $p4->setSexo("F");

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);

        $p2->setCurso("Informatica");
        $p3->setSalario(2500.75);
        $p4->setSetor("Estoque");

        $p3->receberAumento(50);
        $p4->mudarTrabalho();
        $p2->cancelarMatricula();

        ?>
    </pre>

</body>
</html>
