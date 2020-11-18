<?php
require_once("../model/banco.php");
require_once("../gulp.php");
class deleteVenda {
    private $deleta;

    public function __construct($id_venda){
        $this->deleta = new Banco();
        if($this->deleta->deleteVenda($id_venda)){            
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/menu.php?page=relVendedor.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}

new deleteVenda($_GET['id']);
?>
