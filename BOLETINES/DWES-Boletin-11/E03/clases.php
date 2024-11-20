<?php 

class A {
    private $soyPrivado;

    public function copiar (A $obj)
    {
        $this->soyPrivado = $obj->soyPrivado;
    }

    public function __construct(int $valor) {
        $this->soyPrivado = $valor;
    }

    public function getValor() : int {return $this->soyPrivado; }
}

class B {
    private $soyPrivado;

    public function copiar (A $obj)
    {
        $this->soyPrivado = $obj->soyPrivado;
    }

    public function __construct(int $valor) {
        $this->soyPrivado = $valor;
    }

    public function getValor() : int {return $this->soyPrivado; }
}

$obj1 = new A(3);
$obj2 = new A(4);
// $obj1->soyPrivado = 10;     NO VALIDO
// $obj2->soyPrivado = $obj1->soyPrivado;    NO VALIDO
$obj1->copiar($obj2);
echo $obj2->getValor() . "\n";

