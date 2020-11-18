<?php
require_once("../model/banco.php");

class listarControllerProduto{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();
    }

    private function criarTabela(){
        $row = $this->lista->getProduto();
        foreach ($row as $value){                        
			echo '<tr>';
            echo '<td  class="text-left">' .$value['nome']. '</td>';
            echo '<td  class="text-right">' .$value['valor']. '</td>';            
            echo '<td  class="text-center">' .$value['quantidade']. '</td>';                        
            echo '<td  class="text-center"> <a class="fa fa-trash" href="../controller/ControllerDeletarProduto.php?id='.$value["id_produto"].'"</a></td>';            
            echo '<td  class="text-center"> <a class="fa fa-pencil" href="../view/menu.php?page=editarProduto.php&id='.$value["id_produto"].'"</a></td>';                                    
        }        
    }
}
