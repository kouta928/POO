<?php

class Funcionario{
    public $nome;
    protected $salario;
    private $cpf;

    public function getFuncionario(){
        return "
        Nome: {$this->nome}<br>
        CPF: {$this->cpf}<br>
        Salário: {$this->salario}<br>
        ";
    }

    public function setSalario($value){
        $this->salario = $value;
    }

    public function setCPF($value){
        $this->cpf = $value;
    }


}

$bruno = new Funcionario();
$bruno->nome = "Bruno";
$bruno->setCPF("000.000.000-99");
$bruno->setSalario(28.000);
echo $bruno->getFuncionario();
