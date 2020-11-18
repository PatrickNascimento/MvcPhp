<?php
require_once("../gulp.php");
?>

<!DOCTYPE HTML>
<html>

<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
            <form method="post" action="../controller/ControllerCadastroProduto.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Cadastrar Produto
				</span>

				<div class="wrap-input100 validate-input" data-validate="Nome é obrigatório">
					<input class="input100" type="text"  id="nome" name="nome" placeholder="Nome produto">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				
				<div class="wrap-input100 validate-input" data-validate="Valor">
					<input class="input100" type="text"  id="valor" name="valor" placeholder="Valor">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				
				<div class="wrap-input100 validate-input" data-validate="Quantidade">
					<input class="input100" type="text"  id="quantidade" name="quantidade" placeholder="quantidade">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				

				<!-- <div class="wrap-input100 validate-input" data-validate = "Comissão é obrigatório">
					<input class="input100"  id="comissao" name="comissao" placeholder="Insira uma comissão"></input>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div> -->

				<div class="container-contact100-form-btn">					
					<button class="btn btn-success" type="button" onclick="validar()">Gravar</button>						
					</button>
				</div>
			</form>
		</div>
	</div>

    <script language="javascript" type="text/javascript"> 
        function validar() {			
			var nome = $('#nome').val();
			var quantidade = $('#quantidade').val();			
			var valor = $('#valor').val();			
			var comissao = $('#comissao').val();			
				
			if (nome.length == 0) {
                    alert("Informe o nome do produto");
                    $('#nome').focus();
                    return false;
			}
			if (valor.length == 0) {
                    alert("Informe um valor");
                    $('#comissao').focus();
                    return false;
            }
			if (quantidade.length == 0) {
                    alert("Informe uma quantidade");
                    $('#quantidade').focus();
                    return false;
			}
			// if (comissao.length == 0) {
            //         alert("Preencha uma comissao");
            //         $('#comissao').focus();
            //         return false;
            // }
            form.submit();
        }
    </script>
</body>

</html>
