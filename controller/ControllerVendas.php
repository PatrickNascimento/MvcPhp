<?php
require_once("../model/banco.php");

class listaVendedorVendas{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();
    }

    private function criarTabela(){
        $row = $this->lista->getVendedor();
        foreach ($row as $value){  
            echo '<option value='.$value['id_vendedor'].'>'.$value['nome'].'</option>';
        }        
    }
}

class listaProdutoVendas{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();
    }

    private function criarTabela(){
        $row = $this->lista->getProduto();
        foreach ($row as $value){  
            echo '<option valor='.$value['valor'].' value='.$value['id_produto'].'>'.$value['nome'].'</option>';
        }        
    }
}

class listaValorProduto{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();
    }

    private function criarTabela(){
        $row = $this->lista->pesquisaProduto($id);
        foreach ($row as $value){  
            echo $value['valor'];
        }        
    }
}

