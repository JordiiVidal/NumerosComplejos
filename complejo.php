<?php

class Complejo{

    private $real;
    private $imaginaria;

    public function __construct(float $real, float $imaginaria){
        $this->real = $real;
        $this->imaginaria = $imaginaria;
    }

    //getters
    function __get($propiedad){

        return $this->propiedad;

    }


    //setters
    function __set($propiedad, $valor){

        $this->$propiedad = $valor;

    }

    //functions 
    function sumar(Complejo $complejo){
        $this->real = $this->real + $complejo->real;
        $this->imaginaria = $this->imaginaria + $complejo->imaginaria;
    }

    function mutiplicar(Complejo $complejo){
        $this->real = $this->real * $complejo->real;
        $this->imaginaria = $this->imaginaria * $complejo->imaginaria;
    }
    function igual(Complejo $complejo){
        if(($this->real == $complejo->real) && ($this->imaginaria == $complejo->imaginaria)){
            return true;
        }
        return false;
    }

    function __toString(){
        return '('.$this->real.' , '.$this->imaginaria.'i)';
    }

}
$complejo1 = new Complejo(2.3,4);
$complejo2 = new Complejo(4,5);

echo 'Complejo 1 '.$complejo1;
echo 'Complejo 2 '.$complejo2;

$complejo1->sumar($complejo2);

echo $complejo1;

$complejo1->mutiplicar($complejo2);

echo $complejo1;

echo $complejo1->igual($complejo2);
