<?php
require_once("banco.php");

class CadastroVendedor extends Banco {

    private $id_vendedor;
    private $nome;
    private $comissao;    

    //Metodos Set
    public function setId($int){
        $this->$id_vendedor = $int;
    }
    public function setNome($string){
        $this->nome = $string;
    }
    public function setComissao($string){
        $this->comissao = $string;
    }
    
    //Metodos Get
    public function getId(){
        return $this->$id_vendedor;
    }
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
