<?php 
require_once("../controller/ControllerListarVendedor.php");
require_once("../gulp.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<body>
   
   <div style='top: -300px'>
    <table class="table-fill">
        <thead>
            <tr class="text-left">
                <th class="text-left" width="60%" >Nome</th>
                <th class="text-left" width="20%">Comissão</th>                
            </tr>
        </thead>
        <tbody>
            <?php new listarControllerVendedor(); ?>
        </tbody>
    </table>  
    </div>
</body>
</html>
