<?php
/* 
PUBLIC -> o mais permissivo, onde qualquer um pode acessar os metodos ou atributos de fora da classe.
PRIVATE -> é o mais restritivo. Apenas a classe que definiu pode acessar os metodos ou atributos.
PROTECTED -> indica que somente a classe que definiu ou herdeiras tem acesso aos métodos e atributos.
 */

 class Classe{
    public $propPublica = "publico";
    private $propPrivada;

    public function metodoPublico(){
        echo $this->propPublica;
    }

    private function metodoPrivado(){
        echo $this->propPrivada;
    }

    protected function metodoProtegido(){
        echo $this->propProtegida;
    }

 }

$teste = new Classe();
$teste-> propPublica = "esta propriedade é pública";
$teste->metodoPublico();
$teste->metodoPrivado();