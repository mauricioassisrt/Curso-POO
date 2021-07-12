<?php


require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao
{
    private $titulo, $autor, $totalPaginas, $pagAtual, $aberto, $leitor;

    /**
     * Livro constructor.
     * @param $titulo
     * @param $autor
     * @param $totalPaginas
     * @param $leitor
     */
    public function __construct($titulo, $autor, $totalPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPaginas = $totalPaginas;
        $this->leitor = $leitor;
    }


    public function detalhes()
    {

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
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor): void
    {
        $this->autor = $autor;
    }

    /**
     * @return mixed
     */
    public function getTotalPaginas()
    {
        return $this->totalPaginas;
    }

    /**
     * @param mixed $totalPaginas
     */
    public function setTotalPaginas($totalPaginas): void
    {
        $this->totalPaginas = $totalPaginas;
    }

    /**
     * @return mixed
     */
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    /**
     * @param mixed $pagAtual
     */
    public function setPagAtual($pagAtual): void
    {
        $this->pagAtual = $pagAtual;
    }

    /**
     * @return mixed
     */
    public function getAberto()
    {
        return $this->aberto;
    }

    /**
     * @param mixed $aberto
     */
    public function setAberto($aberto): void
    {
        $this->aberto = $aberto;
    }

    /**
     * @return mixed
     */
    public function getLeitor()
    {
        return $this->leitor;
    }

    /**
     * @param mixed $leitor
     */
    public function setLeitor($leitor): void
    {
        $this->leitor = $leitor;
    }


    public function abrir()
    {
        $this->aberto = true;
    }

    public function fechar()
    {
        $this->aberto = false;

    }

    public function folhear($pagina)
    {
        if ($pagin > $this->totalPaginas) {
            $this->pagAtual = 0;

        } else {
            $this->pagAtual = $pagina;
        }
    }

    public function avancarPagina()
    {
        $this->pagAtual++;
    }

    public function voltarPagina()
    {
        $this->pagAtual--;
    }
}