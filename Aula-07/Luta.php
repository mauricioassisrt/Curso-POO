<?php
require_once 'Lutador.php';

class Luta
{
    private $desafiado;
    private $desafiante = Lutador;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2)
    {
        if ($l1->getCate && ($l1!=$l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar()
    {
        if ($this->aprovada) {
            $this->desafiado
        }
    }

    /**
     * @return mixed
     */
    public function getDesafiado()
    {
        return $this->desafiado;
    }

    /**
     * @param mixed $desafiado
     */
    public function setDesafiado($desafiado): void
    {
        $this->desafiado = $desafiado;
    }

    /**
     * @return mixed
     */
    public function getDesafiante()
    {
        return $this->desafiante;
    }

    /**
     * @param mixed $desafiante
     */
    public function setDesafiante($desafiante): void
    {
        $this->desafiante = $desafiante;
    }

    /**
     * @return mixed
     */
    public function getRounds()
    {
        return $this->rounds;
    }

    /**
     * @param mixed $rounds
     */
    public function setRounds($rounds): void
    {
        $this->rounds = $rounds;
    }

    /**
     * @return mixed
     */
    public function getAprovada()
    {
        return $this->aprovada;
    }

    /**
     * @param mixed $aprovada
     */
    public function setAprovada($aprovada): void
    {
        $this->aprovada = $aprovada;
    }

}