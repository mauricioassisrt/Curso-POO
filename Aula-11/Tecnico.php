<?php

require_once 'Aluno.php';

class Tecnico extends Aluno
{
    public function registroProfissional()
    {
        echo "O registro profissional dele é ";
    }

    public function praticar()
    {
        echo "Ele pratica";
    }
}