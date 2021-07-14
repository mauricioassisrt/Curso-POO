<?php

require_once 'Pessoa.php';

class Professor extends Pessoa
{
    private $especialidade, $salario;

    public function receberAumento()
    {
        echo "seu aumento foi de " . $this->salario;
    }

    /**
     * @return mixed
     */
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * @param mixed $especialidade
     */
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @param mixed $salario
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

}