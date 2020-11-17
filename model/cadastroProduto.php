<?php
require_once("banco.php");

class CadastroProduto extends Banco {

    private $id_produto;
    private $nome;
    private $valor;
    private $quantidade;
    private $data;
    private $comissao;    

    //Metodos Set
    public function setId($int){
        $this->$id_vendedor = $int;
    }
    public function setNome($string){
        $this->nome = $string;
    }
    public function setValor($double){
        $this->valor = $double;
    }
    public function setQuantidade($double){
        $this->quantidade = $double;
    }
    public function setComissao($string){
        $this->comissao = $string;
    }
    
    //Metodos Get
    public function getId(){
        return $this->$id_produto;
    }
    public function getNome(){
        return $this->nome;
    }  
    public function getValor(){
        return $this->valor;
    }  
    public function getQuantidade(){
        return $this->quantidade;
    }  
    public function getComissao(){
        return $this->comissao;
    }
    
    public function incluir(){        
        return $this->setProduto($this->getNome(),$this->getValor(),$this->getQuantidade(),$this->getComissao());
    }
}
?>
