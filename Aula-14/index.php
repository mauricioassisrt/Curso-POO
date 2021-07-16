<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aula 14</title>
</head>
<body>
<pre>
    <?php
    require_once 'Video.php';
    require_once 'Gafanhoto.php';
    require_once 'Visualizacao.php';

    $v1[0] = new Video("Aula 1");
    $v1[1] = new Video("Aula 34");
    $v1[2] = new Video("Aula 53");
    $g[0]=new Gafanhoto("Jubileu", "Jubileu", 12, "M");
    $vis[0]= new Visualizacao($g[0], $v1[2]);
    print_r($vis);
    ?>
</pre>
</body>
</html>