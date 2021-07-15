<?php
require_once 'Animal.php';

class Reptil extends Animal
{
    private $corEscama;

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
        echo "<p>Emitir som</p>";
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