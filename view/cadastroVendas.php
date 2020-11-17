<?php
require_once("../gulp.php");
require_once("../controller/ControllerVendas.php");
?>

<!DOCTYPE HTML>
<html>

<body>
	<div class="container-contact100">	
		<div class="wrap-contact100">
			<form method="post" action="../controller/ControllerCadastroVenda.php?id_vendedor=1&id_produto=62" id="form" name="form" onsubmit="validar(document.form); return false;" class="contact100-form validate-form">			
				<span class="contact100-form-title">
					Vendas
				</span>

				<div class="select ">
					<select  type="SELECT"  id="vendedor" name="vendedor">
					<option value="" disabled selected>Selecione um vendedor</option>
						<?php new listaVendedorVendas(); ?>
					</select>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>		

				<div class="select ">
					<select  type="SELECT"  id="Produto" name="Produto" >
					<option  value="" disabled selected>Selecione um produto</option>
						<?php new listaProdutoVendas(); ?>
					</select>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>		

				

				<div class="wrap-input100 validate-input" data-validate="Quantidade">
					<input class="input100" type="text"  id="Quantidade" name="quantidade" placeholder="Informe quantidade">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				

				<div class="wrap-input100 validate-input" data-validate="Valor" >
					<input class="input100" type="text"  id="valor" name="valor" value="" readonly placeholder="Valor">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				
				<div class="wrap-input100 validate-input" data-validate="data">
					<input class="input100" type="text"  id="data" name="data" placeholder="Data">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				

				<div class="wrap-input100 validate-input" data-validate = "Comissão é obrigatório">
					<input class="input100"  id="comissao" name="comissao" placeholder="Insira uma comissão"></input>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="container-contact100-form-btn">					
						<button class="btn btn-success" type="submit">Efetuar Venda</button>						
					</button>
				</div>
			</form>
		</div>
	</div>

	<script language="javascript" type="text/javascript">   

	$(document).ready(function($){
		$("#data").mask("99/99/9999");
	});

	document.addEventListener("keydown", function(e) {
		if(e.keyCode === 13) {	  
  		e.preventDefault();
		}

});	

	/**PEGA O VALOR DE ACORDO COM A SELEÇÃO DO PRODUTO */
	$('#Produto').change(function (){
      var option = $(this).find("option:selected");
      var valor  = $(this).find(':selected').attr('valor');
	  $('#valor').val(valor);
	});

	/**TOTALIZA O VALOR DE ACORDO COM A QUANTIDADE E FORMATA O VALOR */
	$('#Quantidade').change(function (){      
	var valor =  $('#valor').val();	
	var quant =  $('#Quantidade').val();	
	var total = (valor * quant).toFixed(2);         
	$('#valor').val(total);
	
	//CRIA A MASCARA PARA O CAMPO DATA	
	$("#data").mask("99/99/9999");
	
	});				 
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
