<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa
{
    private $matricula, $curso;

    public function pagarMensalidade()
    {
        echo "<p>Mensalidade paga com sucesso para o aluno  " . $this->nome . "</p>";
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    /**
     * @return mixed
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * @param mixed $curso
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }


}