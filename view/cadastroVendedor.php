<?php
require_once("../gulp.php");
//include("menu.php"); 
?>

<!DOCTYPE HTML>
<html>

<body>
	<div class="container-contact100">	

		<div class="wrap-contact100">
            <form method="post" action="../controller/ControllerCadastroVendedor.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Cadastro de Vendedor
				</span>

				<div class="wrap-input100 validate-input" data-validate="Nome é obrigatório">
					<input class="input100" type="text"  id="nome" name="nome" placeholder="Nome vendedor">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				

				<div class="wrap-input100 validate-input" data-validate = "Comissão é obrigatório">
					<input class="input100"  id="comissao" name="comissao" placeholder="Insira uma comissão"></input>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="container-contact100-form-btn">					
						<button class="btn btn-success" type="submit">Gravar</button>						
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
