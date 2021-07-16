<?php

require_once 'AcoesVideo.php';

class Video implements AcoesVideo
{

    private $titulo, $avalicao, $view, $curtidas, $reproduzindo;

    /**
     * Video constructor.
     * @param $titulo
     * @param $avalicao
     * @param $view
     * @param $curtidas
     * @param $reproduzindo
     */
    public function __construct($titulo)
    {
        $this->titulo = $titulo;
        $this->avalicao = 1;
        $this->view = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }


    public function play()
    {
        $this->reproduzindo = true;
        return $this->titulo ;
    }

    public function pause()
    {
        $this->reproduzindo = false;
    }

    public function like()
    {
        $this->curtidas++;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getAvalicao()
    {
        return $this->avalicao;
    }

    /**
     * @param mixed $avalicao
     */
    public function setAvalicao($avalicao)
    {
        $this->avalicao = $avalicao;
    }

    /**
     * @return mixed
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param mixed $view
     */
    public function setView($view)
    {
        $this->view = $view;
    }

    /**
     * @return mixed
     */
    public function getCurtidas()
    {
        return $this->curtidas;
    }

    /**
     * @param mixed $curtidas
     */
    public function setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;
    }

    /**
     * @return mixed
     */
    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    /**
     * @param mixed $reproduzindo
     */
    public function setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;
    }


}