<?php

class Caneta
{
    private $modelo;
    private $cor;
    private $ponta;
    private $carga;
    private $tampa;

    /**
     * Caneta constructor.
     * @param $modelo
     */
    public function __construct($m, $c, $p)// ou nome da Classe
    {

        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }


    public function getModelo()
    {
        return $this->modelo;
    }


    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }


    public function getCor()
    {
        return $this->cor;
    }


    public function setCor($cor)
    {
        $this->cor = $cor;
    }


    public function getPonta()
    {
        return $this->ponta;
    }


    public function setPonta($ponta)
    {
        $this->ponta = $ponta;
    }

    /**
     * @return mixed
     */
    public function getCarga()
    {
        return $this->carga;
    }

    /**
     * @param mixed $carga
     */
    public function setCarga($carga)
    {
        $this->carga = $carga;
    }


    public function getTampa()
    {
        return $this->tampa;
    }

    /**
     * @param mixed $tampa
     */
    public function setTampa($tampa)
    {
        $this->tampa = $tampa;
    }


    private function tampar()
    {
        $this->tampa = true;
    }

    private function destampar()
    {
        $this->tampa = false;
    }

    public function rabiscar()
    {
        if ($this->tampa == true) {
            echo "Caneta está tampada!";
        } else {
            echo "Rabiscando";
        }
    }

    function escrever()
    {
        echo 'escrevendo';
    }

    function pintar()
    {
        echo 'pintando';
    }

}
