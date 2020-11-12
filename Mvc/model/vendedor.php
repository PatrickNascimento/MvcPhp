<?php
require_once("banco.php");

class Vendedor extends Banco {

    private $nome;
    private $comissao;    

    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
    public function setComissao($string){
        $this->comissao = $string;
    }
    
    //Metodos Get
    public function getNome(){
        return $this->nome;
    }
    
    public function getComissao(){
        return $this->comissao;
    }

    public function incluir(){
        return $this->setVendedor($this->getNome(),$this->getComissao());
    }
}
?>
