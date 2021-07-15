<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aula 13</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        require_once 'Animal.php';
        require_once 'Mamifero.php';

        $l = new Lobo();
        $c = new Cachorro();
        $m = new Mamifero();

        $c->reagirFrase("Olá");
        $c->reagirFrase("Vai apanhar");
        $c->reagirHora(11, 11);
        $c->reagirHora(21,21);

        $c->reagirDono(true);
        $c->reagirDono(false);
        ?>
    </pre>
</body>
</html>