<?php

class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampa;

    public  function rabiscar()
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
        echo  'pintando';
    }
    private function tampar()
    {
        $this->tampa = true;
    }

   private function destampar()
    {
        $this->tampa = false;
    }
}
