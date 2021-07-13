<?php

require_once 'Pessoa.php';

class Professor extends Pessoa
{
    private $especialidade, $salario;

    public function receberAumento($aumento)
    {
        $this->setSalario($this->getSalario() + $aumento);
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
    public function setEspecialidade($especialidade): void
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
    public function setSalario($salario): void
    {
        $this->salario = $salario;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade): void
    {
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo): void
    {
        $this->sexo = $sexo;
    }

}