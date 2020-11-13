<?php
require_once("../gulp.php");
require_once("../controller/ControllerEditarVendedor.php");?>
?>

<!DOCTYPE HTML>
<html>

<body>
	<div class="container-contact100">	

		<div class="wrap-contact100">
			<form method="post" action="../controller/ControllerEditarVendedor.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="contact100-form validate-form">			
			
				<span class="contact100-form-title">
					Editar de Vendedor
				</span>
				<div class="wrap-input100-disable validate-input" ">
					<input class="input100" type="text"  id="id_vendedor" name="id_vendedor" readonly value="<?php echo $editar->getid();?>">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				

				<div class="wrap-input100 validate-input" data-validate="Nome é obrigatório">
					<input class="input100" type="text"  id="nome" name="nome" value="<?php echo $editar->getNome();?>">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				

				<div class="wrap-input100 validate-input" data-validate="Nome é obrigatório">
					<input class="input100" type="text"  id="comissao" name="comissao" value="<?php echo $editar->getComissao();?>">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				

				<div class="container-contact100-form-btn">											
						<button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
					</button>
				</div>
			</form>
		</div>
	</div>

    <script language="javascript" type="text/javascript">    

        function validar(formulario) {
            var nome = form.nome.value;            
            
                if ((formulario.nome.length = 0)) {
                    alert("Preencha o campo nome ");
                    formulario.nome.focus();
                    return false;
                }
            formulario.submit();
        }
    </script>
</body>

</html>
