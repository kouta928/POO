<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Corrente</title>
</head>
<body>

<?php

class ContaCorrente {
    private $nomeCliente;
    private $numeroConta;
    private $saldo;

    public function __construct($nomeCliente, $numeroConta, $saldo = 0){
        $this->nomeCliente = $nomeCliente;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        if ($valor > 0){
            $this->saldo += $valor;
            echo "O depósito realizado com sucesso no valor de R$$valor.<br>";
        }else{
            echo "Valor mínimo de depósito: R$1,00";
        }
    }

    public function sacar($valor){
        if ($valor > 0){
            $this->saldo -= $valor;
            echo "Saque realizado no valor de R$$valor.<br>";
        }else{
            echo "Saldo insuficiente.";
        }
    }

    public function exibirSaldo(){
        echo "Cliente: {$this->nomeCliente}<br>";
        echo "Conta Corrente: {$this->numeroConta}<br>";
        echo "Saldo Disponível: R$ {$this->saldo}<br><br>";
    }
}

$conta = new ContaCorrente("Bruno", "123456", 15000);
$conta->exibirSaldo();
$conta->depositar(1800);
$conta->exibirSaldo();
$conta->sacar(2300);
$conta->exibirSaldo();

?>

</body>
</html>