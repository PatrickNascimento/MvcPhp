<?php 
require_once("../controller/ControllerListarVendedor.php");
require_once("../gulp.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<body>
<span class="contact100-form-title-relatorio">
	Relatório de Vendedor
</span>
   
   <div style='top: -300px'>
    <table class="table-fill">
        <thead>
            <tr class="text-left">
                <th class="text-left" width="60%" >Nome</th>
                <th class="text-center" width="20%">Comissão</th>                
            </tr>
        </thead>
        <tbody>
            <?php new listarControllerVendedor(); ?>
        </tbody>
    </table>    
    </div>
</body>
</html>
