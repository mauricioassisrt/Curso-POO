<?php
require_once 'Animal.php';

class Ave extends Animal
{
    private $corPena;

    public function fazerNinho()
    {
        echo "<p>Faz ninho</p>";
    }
    public function locomover()
    {
       echo "<p>Andando</p>";
    }

    public function alimentar()
    {
        echo "<p>Comendo</p>";
    }

    public function emitirSom()
    {
        echo "<p>Emitindo Som!!</p>";
    }

    /**
     * @return mixed
     */
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * @param mixed $corPena
     */
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;
    }


}