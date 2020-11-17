<?php
require_once("../gulp.php");
require_once("../controller/ControllerEditarProduto.php");?>
?>

<!DOCTYPE HTML>
<html>

<body>
	<div class="container-contact100">	

		<div class="wrap-contact100">
			<form method="post" action="../controller/ControllerEditarProduto.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="contact100-form validate-form">			
			
				<span class="contact100-form-title">
					Editar Produto
				</span>
				<div class="wrap-input100-disable validate-input" ">
					<input class="input100" type="text"  id="id_produto" name="id_produto" readonly value="<?php echo $editar->getid();?>">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				

				<div class="wrap-input100 validate-input" data-validate="Nome é obrigatório">
					<input class="input100" type="text"  id="nome" name="nome" value="<?php echo $editar->getNome();?>">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				

				<div class="wrap-input100 validate-input" data-validate="valor">
					<input class="input100" type="text"  id="valor" name="valor" value="<?php echo $editar->getValor();?>">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				

				<div class="wrap-input100 validate-input" data-validate="quantidade">
					<input class="input100" type="text"  id="quantidade" name="quantidade" value="<?php echo $editar->getQuantidade();?>">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				

				<div class="wrap-input100 validate-input" data-validate="comissao">
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
