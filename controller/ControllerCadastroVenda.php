<?php

require_once("../model/cadastroProduto.php");
require_once("../model/cadastroVenda.php");
require_once("../gulp.php");
class cadastroVendaController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new CadastroVenda();
        $this->incluir();
    }

    private function incluir(){        
        $this->cadastro->setIdVendedor($_GET['id_vendedor']);
        $this->cadastro->setIdProduto($_GET['id_produto']);
        $this->cadastro->setValor($_POST['valor']);
        $this->cadastro->setQuantidade($_POST['quantidade']);          
        $this->cadastro->setData($_POST['data']);          
        //$this->cadastro->setComissao($_POST['comissao']);          

        $result = $this->cadastro->incluir();        
        if($result >= 1){            
                echo "<script>
                Swal.fire({
                title: 'Registro inserido com sucesso!',            
                icon: 'success'            
              }).then((result) => {            
                if (result.isConfirmed) {
                    document.location='../view/menu.php?page=CadastroVendas.php';
                } 
              })        
             </Script>";
        }else{
           echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
}
new cadastroVendaController();
