<?php

require_once 'Mamifero.php';

class Canguru extends Mamifero
{
    public function usarBolsa()
    {
        echo "<p>Usa a bolsa </p>";
    }

    public function locomover()
    {
        echo "<p>O canguru pula</p>";
    }



}