<?php

class Complejo{

    private $real;
    private $imaginaria;

    public function __construct(float $real, float $imaginaria){
        $this->setReal($real);
        $this->setImaginaria($imaginaria);
    }

    //getters
    function getReal(){
        return $this->real;
    }
    function getImaginaria(){
        return $this->imaginaria;
    }

    //setters
    function setReal($real){
        if(empty($real)){
            throw new Exception('Numero real Vacio');
        }else{
            $this->real = $real;
        }
    }
    function setImaginaria($imaginaria){
        if(empty($imaginaria)){
            throw new Exception('Numero imaginario Vacio');
        }else{
            $this->imaginaria = $imaginaria;
        }
    }

    //functions 
    function sumar(Complejo $complejo){
        $this->setReal($this->getReal() + $complejo->getReal());
        $this->setImaginaria($this->getImaginaria() + $complejo->getImaginaria());
    }

    function mutiplicar(Complejo $complejo){
        $this->setReal($this->getReal() * $complejo->getReal());
        $this->setImaginaria($this->getImaginaria() * $complejo->getImaginaria());
    }
    function igual(Complejo $complejo){
        if(($this->getReal() == $complejo->getReal()) && ($this->getImaginaria() == $complejo->getImaginaria())){
            return true;
        }
        return false;
    }

    function toString(){
        return '('.$this->getReal().' , '.$this->getImaginaria().')';
    }

}
$complejo1 = new Complejo(2.3,4);
$complejo2 = new Complejo(4,5);

echo $complejo1->toString();

$complejo1->sumar($complejo2);

echo $complejo1->toString();

$complejo1->mutiplicar($complejo2);

echo $complejo1->toString();

echo $complejo1->igual($complejo2);
