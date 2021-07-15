<?php

require_once 'Animal.php';

class Peixe extends Animal
{
    private $corEscama;

    public function soltarBolha()
    {
     echo "Solta bolha";
    }

    public function locomover()
    {
        echo "<p>NADANDO</p>";
    }

    public function alimentar()
    {
        echo "<p>Comendo!!</p>";
    }

    public function emitirSom()
    {
        echo "<p>Peixe nao faz som</p>";
    }

    /**
     * @return mixed
     */
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * @param mixed $corEscama
     */
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
    }

}