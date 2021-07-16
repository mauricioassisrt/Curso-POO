<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao
{
    private $espectador, $filme;

    /**
     * Visualizacao constructor.
     * @param $espectador
     * @param $filme
     */
    public function __construct($espectador, $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
    }


    public function avaliar()
    {

    }

    public function avaliarN($nota)
    {

    }

    public function avaliarC($porc)
    {

    }

    /**
     * @return mixed
     */
    public function getEspectador()
    {
        return $this->espectador;
    }

    /**
     * @param mixed $espectador
     */
    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;
    }

    /**
     * @return mixed
     */
    public function getFilme()
    {
        return $this->filme;
    }

    /**
     * @param mixed $filme
     */
    public function setFilme($filme)
    {
        $this->filme = $filme;
    }

}