<?php
require_once("../model/banco.php");
class deleteVendedor {
    private $deleta;

    public function __construct($id_vendedor){
        $this->deleta = new Banco();
        if($this->deleta->deleteVendedor($id_vendedor)){            
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/relVendedor.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
new deleteVendedor($_GET['id']);
?>
