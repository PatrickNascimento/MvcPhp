<?php
require_once("../model/cadastroVendedor.php");
class cadastroVendedorController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new CadastroVendedor();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setComissao($_POST['comissao']);          
        $result = $this->cadastro->incluir();        
        if($result >= 1){
           echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastroVendedor.php'</script>";
        }else{
           echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
}
new cadastroVendedorController();
