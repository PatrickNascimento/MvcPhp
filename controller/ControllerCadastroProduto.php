<?php
require_once("../model/cadastroProduto.php");
require_once("../gulp.php");
class cadastroProdutoController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new CadastroProduto();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setValor($_POST['valor']);
        $this->cadastro->setQuantidade($_POST['quantidade']);
        //$this->cadastro->setComissao($_POST['comissao']);          
        $result = $this->cadastro->incluir();        
        if($result >= 1){            
                echo "<script>
                Swal.fire({
                title: 'Registro inserido com sucesso!',            
                icon: 'success'            
              }).then((result) => {            
                if (result.isConfirmed) {
                    document.location='../view/menu.php?page=cadastroProduto.php';
                } 
              })        
             </Script>";
        }else{
           echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
}
new cadastroProdutoController();
