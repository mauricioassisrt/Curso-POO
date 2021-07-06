<?php


class Lutador
{
    private $nome;
    private $ascionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function apresentar()
    {

    }

    public function status()
    {

    }

    public function ganharLuta()
    {

    }

    public function perderLuta()
    {

    }

    public function empatarLuta()
    {

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
    public function getAscionalidade()
    {
        return $this->ascionalidade;
    }

    /**
     * @param mixed $ascionalidade
     */
    public function setAscionalidade($ascionalidade): void
    {
        $this->ascionalidade = $ascionalidade;
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
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura): void
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso): void
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria): void
    {
        $this->categoria = $categoria;
    }

    /**
     * @return mixed
     */
    public function getVitorias()
    {
        return $this->vitorias;
    }

    /**
     * @param mixed $vitorias
     */
    public function setVitorias($vitorias): void
    {
        $this->vitorias = $vitorias;
    }

    /**
     * @return mixed
     */
    public function getDerrotas()
    {
        return $this->derrotas;
    }

    /**
     * @param mixed $derrotas
     */
    public function setDerrotas($derrotas): void
    {
        $this->derrotas = $derrotas;
    }

    /**
     * @return mixed
     */
    public function getEmpates()
    {
        return $this->empates;
    }

    /**
     * @param mixed $empates
     */
    public function setEmpates($empates): void
    {
        $this->empates = $empates;
    }


}