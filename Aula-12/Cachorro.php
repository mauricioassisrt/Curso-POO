<?php

require_once 'Mamifero.php';

class Cachorro extends Mamifero
{
    public function enterraOsso()
    {
        echo "<p>Enterra osso </p>";
    }

    public function abanaRabo()
    {
        echo "<p>Abana o rabo</p>";
    }
    public function emitirSom()
    {
        echo   "<p>Au!au!au!</p>";
    }
}