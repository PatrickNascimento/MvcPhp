<?php
require_once("../model/banco.php");
require_once("../gulp.php");
class deleteProduto {
    private $deleta;

    public function __construct($id_produto){
        $this->deleta = new Banco();
        if($this->deleta->deleteProduto($id_produto)){            
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/menu.php?page=relProdutos.php'</script>";
        //     echo "<script>
        //     Swal.fire({
        //         title: 'Aviso',
        //         text: 'Confirma exclusão deste registro?',
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Yes, delete it!'
        //       }).then((result) => {
        //         if (result.isConfirmed) {
        //             document.location='../view/menu.php?page=relProdutos.php;
        //           )
        //         }
        //       })
        //  </Script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}

new deleteProduto($_GET['id']);
?>
