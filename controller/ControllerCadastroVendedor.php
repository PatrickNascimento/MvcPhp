<?php
require_once("../model/cadastroVendedor.php");
require_once("../gulp.php");
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
            //echo "console.log";
            echo "<script>
            Swal.fire({
            title: 'Registro inserido com sucesso!',            
            icon: 'success'            
          }).then((result) => {            
            if (result.isConfirmed) {
                document.location='../view/menu.php?page=cadastroVendedor.php';
            } 
          })        
         </Script>";
        }else{
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Ocorreu um erro ao cadastrar'                
          }).then((result) => {            
            if (result.isConfirmed) {
                document.location='../view/menu.php?page=cadastroVendedor.php';
            } 
          })        
         </Script>";
        }
    }
}
new cadastroVendedorController();
