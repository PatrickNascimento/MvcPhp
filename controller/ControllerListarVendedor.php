<?php
require_once("../model/banco.php");

class listarControllerVendedor{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();
    }

    private function criarTabela(){
        $row = $this->lista->getVendedor();
        foreach ($row as $value){                        
			echo '<tr>';
            echo '<td  class="text-left">' .$value['nome']. '</td>';
			echo '<td  class="text-center">' .$value['comissao']. '</td>';            
            echo '<td  class="text-center"> <a class="fa fa-trash" href="../controller/ControllerDeletarVendedor.php?id='.$value["id_vendedor"].'"</a></td>';            
            echo '<td  class="text-center"> <a class="fa fa-pencil" href="../view/menu.php?page=editarVendedor.php&id='.$value["id_vendedor"].'"</a></td>';                                    
        }        
    }
}
