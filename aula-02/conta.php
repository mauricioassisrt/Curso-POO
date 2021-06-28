<?php require_once 'Model/ContaBanco.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta </title>
</head>

<body>
    <pre>
    <?php

    /*
    jubileu 
    */
    $conta1 = new ContaBanco();
    $conta1->abrirConta("CC");
    $conta1->setDono("Jubileu");
    $conta1->setNumConta(1111);
    $conta1->deposistar(300);
    $conta1->pagamentoMensalidade();
    $conta1->sacar(338);
    $conta1->fecharConta();

    /*
    CREUSA 
    */
    //creusa 
    $conta2 = new ContaBanco();
    $conta2->abrirConta("CP");
    $conta2->setDono("CREUSA ");
    $conta2->setNumConta(112222221);
    $conta2->deposistar(500);
    $conta2->sacar(650);
    $conta2->pagamentoMensalidade();
    $conta2->fecharConta();


    //print test
    print_r($conta1);
    print_r($conta2);

    ?>
    </pre>
</body>

</html>