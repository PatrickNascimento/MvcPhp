<?php
require_once("../model/banco.php");

class editarController {

    private $editar;
    private $id_produto;
    private $valor;
    private $quantidade;    
    private $comissao;    

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaProduto($id);           
        foreach ($row as $value){                     
        $this->id_produto = $value['id_produto'];
        $this->nome = $value['nome'];
        $this->valor = $value['valor'];
        $this->quantidade = $value['quantidade'];
        $this->comissao = $value['comissao'];           
        }
    }

    public function editarFormulario($id_produto,$nome,$valor,$quantidade,$comissao){
        
        if ($this->editar->updateProduto($id_produto,$nome,$valor,$quantidade,$comissao) == TRUE) {
            echo "<script>alert('Registro editado com sucesso!');document.location='../view/menu.php?page=relProdutos.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');document.location='../view/menu.php?page=relProdutos.php'</script>";
        }
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
    public function getId(){
        return $this->id_produto;
    }   
}

$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){    
    $editar->editarFormulario($_POST['id_produto'],$_POST['nome'],$_POST['valor'],$_POST['quantidade'],$_POST['comissao']);
}
?>

