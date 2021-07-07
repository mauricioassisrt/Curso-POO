<?php


class Lutador
{
    private $nome;
    private $nascionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    /**
     * Lutador constructor.
     * @param $nome
     * @param $nascionalidade
     * @param $idade
     * @param $altura
     * @param $peso
     * @param $categoria
     * @param $vitorias
     * @param $derrotas
     * @param $empates
     */
    public function __construct($nome, $nascionalidade, $idade, $altura, $peso, $categoria, $vitorias, $derrotas, $empates)
    {
        $this->nome = $nome;
        $this->nascionalidade = $nascionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->categoria = $categoria;
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }


    public function apresentar()
    {
        echo(
            "LUTADOR " . $this->getNome()
            . "<br> ORIGEM " . $this->getNascionalidade()
            . "<br>IDADE " . $this->getIdade()
            . "<br>ALTURA " . $this->getAltura()
            . "<br>PESANDO " . $this->getPeso()
            . "<br>GANHOU " . $this->getVitorias()
            . "<br>PERDEU " . $this->getDerrotas()
            . "<br>Empates " . $this->getEmpates()
        );

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
    public function getNascionalidade()
    {
        return $this->nascionalidade;
    }

    /**
     * @param mixed $nascionalidade
     */
    public function setNascionalidade($nascionalidade): void
    {
        $this->nascionalidade = $nascionalidade;
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
        $this->setCategoria();
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }


    public function setCategoria()
    {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "Invalido";
        } elseif ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {

            $this->categoria = "Invalido";
        }

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