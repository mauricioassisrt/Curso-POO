<?php


class Pessoa
{
    private $nome, $idade, $sexo;

    public function fazerAniversario()
    {
        $this->setIdade($this->getIdade() + 1);
    }

    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }


    public function setIdade($idade): void
    {
        $this->idade = $idade;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo): void
    {
        $this->sexo = $sexo;
    }


}