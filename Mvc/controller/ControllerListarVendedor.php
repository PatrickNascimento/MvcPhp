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
            // echo "<td><a class='btn btn-warning' href='editar.php?id=".$value['nome']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['nome']."'>Excluir</a></td>";            
            // echo '<td class="text-center"><button class="btn"><i class="fa fa-trash"></i> onclick='../controller/ControllerDeletar.php?id=".$value['nome'].'</button></td>';
			echo '<tr>';
            echo '<td  class="text-left">' .$value['nome']. '</td>';
			echo '<td  class="text-center">' .$value['comissao']. '</td>';            
            echo '<td  class="text-center"> <a class="fa fa-trash" href="../controller/ControllerDeletarVendedor.php?id='.$value["id_vendedor"].'"</a></td>';            
            echo '<td  class="text-center"> <a class="fa fa-pencil" href="../controller/ControllerDeletarVendedor.php?id='.$value["id_vendedor"].'"</a></td>';            
            
            
        }        
    }
}
