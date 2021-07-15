<?php

require_once 'Animal.php';

class Mamifero extends Animal
{
    private $corPelo;


    public function locomover()
    {
        echo "<p>Correndo </p>";
    }

    public function alimentar()
    {
        echo "<p>Mammando </p>";
    }

    public function emitirSom()
    {
        echo "<p>Faz som Mamifero</p>";
    }

    /**
     * @return mixed
     */
    public function getCorPelo()
    {
        return $this->corPelo;
    }

    /**
     * @param mixed $corPelo
     */
    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;
    }


}