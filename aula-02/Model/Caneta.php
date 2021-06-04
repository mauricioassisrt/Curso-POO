<?php

class Caneta
{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampa;

    function rabiscar()
    {
        if ($this->tampa == true) {
            echo "Caneta está tampada!";
        } else {
            echo "Rabiscando";
        }
    }

    function tampar()
    {
        $this->tampa = true;
    }

    function destampar()
    {
        $this->tampa = false;
    }
}
