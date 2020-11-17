<?php
require_once("../model/banco.php");

class listarControllerProdutoVendas{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();
    }

    private function criarTabela(){
        $row = $this->lista->getProduto();
        foreach ($row as $value){  
            echo '<option value='.$value['id_produto'].'>'.$value['nome'].'</option>';
        }        
    }
}
