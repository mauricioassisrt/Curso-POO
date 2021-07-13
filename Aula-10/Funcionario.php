<?php


class Funcionario extends Pessoa
{
    private $setor, $trabalhando;

    public function mudarTrabalho($novoTrabalho, $setor)
    {
        $this->setTrabalhando($novoTrabalho);
        $this->setSetor($setor);
    }

    /**
     * @return mixed
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * @param mixed $setor
     */
    public function setSetor($setor): void
    {
        $this->setor = $setor;
    }

    /**
     * @return mixed
     */
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    /**
     * @param mixed $trabalhando
     */
    public function setTrabalhando($trabalhando): void
    {
        $this->trabalhando = $trabalhando;
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