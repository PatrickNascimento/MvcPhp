<?php
require_once("banco.php");
class CadastroVenda extends Banco {
    
    private $id_venda;
    private $id_vendedor;
    private $id_produto;
    private $nome;
    private $valor;    
    private $data;
    private $comissao;    

    //Metodos Set
    public function setIdVenda($int){
        $this->id_venda = $int;
    }    
    public function setIdVendedor($int){
        $this->id_vendedor = $int;
    }
    public function setIdProduto($int){
        $this->id_produto = $int;
    }    
    public function setValor($double){
        $this->valor = $double;
    }
    public function setQuantidade($double){
        $this->quantidade = $double;
    }
    public function setData($date){
        $this->data = $date;
    }
    public function setComissao($string){
        $this->comissao = $string;
    }
    
    //Metodos Get
    public function getIdVenda(){
        return $this->id_venda;
    }

    public function getIdVendedor(){
        return $this->id_vendedor;
    }
    public function getIdProduto(){
        return $this->id_produto;
    }
    
    public function getValor(){
        return $this->valor;
    }  
    public function getQuantidade(){
        return $this->quantidade;
    }  
    public function getData(){
        return $this->data;
    }  
    public function getComissao(){
        return $this->comissao;
    }
    
    public function incluir(){        
        return $this->setVenda($this->getIdVendedor(),$this->getIdProduto(),$this->getValor(),$this->getQuantidade(),$this->getData(),$this->getComissao());
    }
}

?>