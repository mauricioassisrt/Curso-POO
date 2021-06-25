<?php

/*
 *
 */

class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
    }

    /*
     * COnta correntee ganha 50 reais se for poupança 150 reais
    */
    public function abrirConta($tipo)
    {
        $this->setTipo($tipo);
        $this->setStatus(true);
        if ($tipo == "CC") {
            $this->setSaldo(50);
        } elseif ($tipo == "CP") {
            $this->setSaldo(150);
        }
    }

    /*
     * Não pode ter saldo para fechar e não ter debitos
     */
    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "Conta possui dinheiro ";
        } elseif ($this->getSaldo() < 0) {
            echo "conta nao possui dinheiro ";
        } else {
            $this->setStatus(false);
        }
    }

    /*
     * conta estar com status aberto,
     */
    public function deposistar($valor)
    {
        if ($this->getStatus() == true) {
            $this->setSaldo($valor + $this->getSaldo());
        } else {
            echo "Conta fechada nao é possivel depositar ";
        }
    }

    /*
     * status aberto, e ter saldo
     */
    public function sacar($valor)
    {
        if ($this->getStatus() == true) {
            if ($this->getSaldo() > $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
            } else {
                echo "Saldo insuficiente ";
            }
        } else {
            echo " A conta não está aberta";
        }
    }

    /*
     * conta corrente paga 12 reais de mensalidade
     * conta poupança 20 reais de mensalidade
     */
    public function pagamentoMensalidade()
    {

        if ($this->getTipo() == "CC") {
            $v = 12;
        } else if ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus() == true) {
            if ($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "Saldo Insuficiente";
            }
            echo "Impossivel pagar";
        }
    }

    public function getNumConta()
    {
        return $this->numConta;
    }


    public function setNumConta($numConta): void
    {
        $this->numConta = $numConta;
    }


    public function getTipo()
    {
        return $this->tipo;
    }


    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }

    public function getDono()
    {
        return $this->dono;
    }


    public function setDono($dono): void
    {
        $this->dono = $dono;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }


    public function setSaldo($saldo): void
    {
        $this->saldo = $saldo;
    }


    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status): void
    {
        $this->status = $status;
    }

}