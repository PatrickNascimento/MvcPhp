<?php
require_once("../model/banco.php");

class listarControllerVendas{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();
    }

    private function criarTabela(){
        $filtro = '';
        $row = $this->lista->getVenda($filtro);
        foreach ($row as $value){                        
			echo '<tr>';
            echo '<td  class="text-left">' .$value['vendedor']. '</td>';
            echo '<td  class="text-left">' .$value['produto']. '</td>';            
            echo '<td  class="text-center">' .$value['Data_venda']. '</td>';                        
            echo '<td  class="text-right">' .$value['valor_venda']. '</td>';                        
            echo '<td  class="text-center">' .$value['comissao']. '%</td>';                        
            echo '<td  class="text-center"> <a class="fa fa-trash" href="../controller/ControllerDeletarVenda.php?id='.$value["id_vendas"].'"</a></td>';            
            //echo '<td  class="text-center"> <a class="fa fa-pencil" href="../view/menu.php?page=editarProduto.php&id='.$value["id_produto"].'"</a></td>';                                    
        }        
    }
}

class VendasTotal{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();
    }

    private function criarTabela(){
        $filtro = '';
        $row = $this->lista->getVendaTotal($filtro);
        foreach ($row as $value){                        			
            echo $value['valortotal'];            
        }        
    }
}

class VendasTotalcomissao{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();
    }

    private function criarTabela(){
        $filtro = '';
        $row = $this->lista->getVendaTotalComissao($filtro);
        foreach ($row as $value){                        			
            echo $value['totalcomissao'];            
        }        
    }
}
