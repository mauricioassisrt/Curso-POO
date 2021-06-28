<?php
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
        echo '<p> Conta criada com sucesso </p>';
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
            echo "<p>Conta possui dinheiro, não é possivel fecha-lá </p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>conta nao possui dinheiro</p> ";
        } else {
            $this->setStatus(false);
            echo "<p>conta de " .$this->getDono(). " , fechada com sucesso !</p> ";
        }
    }

    /*
     * conta estar com status aberto,
     */
    public function deposistar($valor)
    {
        if ($this->getStatus()) {
            $this->setSaldo($valor + $this->getSaldo());
            echo "<p>Deposito de  " . $valor . "  na conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p>Conta fechada nao é possivel depositar </p>";
        }
    }

    /*
     * status aberto, e ter saldo
     */
    public function sacar($valor)
    {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de  " . $valor . " Autorizado na conta de " . $this->getDono() . "</p>";
            } else {
                echo "<p>Saldo insuficiente </p>";
            }
        } else {
            echo "<p> A conta não está aberta</p>";
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
        if ($this->getStatus()) {
            if ($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade  de  " . $v . " Autorizado na conta de " . $this->getDono() . "</p>";
            } else {
                echo "<p>Não é possivel cobrar</p> ";
            }
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
