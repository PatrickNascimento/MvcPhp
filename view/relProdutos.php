<?php 
require_once("../controller/ControllerListarProduto.php");
require_once("../gulp.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<body>
   
   <div style='top: -300px'>
    <table class="table-fill">
        <thead>
            <tr class="text-left">
                <th class="text-left" width="50%">Nome</th>
                <th class="text-left" width="10%">Valor</th>                
                <th class="text-left" width="10%">Quantidade</th>                
                <th class="text-left" width="10%">Comissão</th>             
            </tr>
        </thead>
        <tbody>
            <?php new listarControllerProduto(); ?>
        </tbody>
    </table>  
    </div>
</body>
</html>
