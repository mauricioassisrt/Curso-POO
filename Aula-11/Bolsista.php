<?php

require_once 'Aluno.php';

class Bolsista extends Aluno
{
    private $bolsa;

    public function RenovarBolsa()
    {
        echo "Bolsa renovada";
    }

    public function pagarMensalidade()
    {
        echo "<p>" . $this->nome . " é bolsista então paga com desconto!!!</p>";
    }

    /**
     * @return mixed
     */
    public function getBolsa()
    {
        return $this->bolsa;
    }

    /**
     * @param mixed $bolsa
     */
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
    }


}