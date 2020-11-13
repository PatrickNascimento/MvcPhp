<?php
require_once("../model/banco.php");

class editarController {

    private $editar;
    private $id_vendedor;
    private $nome;
    private $comissao;    

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaVendedor($id);           
        foreach ($row as $value){                     
        $this->id_vendedor = $value['id_vendedor'];
        $this->nome = $value['nome'];
        $this->comissao = $value['comissao'];           
        }
    }

    public function editarFormulario($id_vendedor,$nome,$comissao){
        
        if ($this->editar->updateVendedor($id_vendedor,$nome,$comissao) == TRUE) {
            echo "<script>alert('Registro editado com sucesso!');document.location='../view/menu.php?page=relVendedor.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');document.location='../view/menu.php?page=relVendedor.php'</script>";
        }

    }        
   

    public function getNome(){
        return $this->nome;
    }
    public function getComissao(){
        return $this->comissao;
    }   
    public function getId(){
        return $this->id_vendedor;
    }   

}

$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){    
    $editar->editarFormulario($_POST['id_vendedor'],$_POST['nome'],$_POST['comissao']);
}
?>
