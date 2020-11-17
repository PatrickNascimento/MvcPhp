<?php
require_once("../gulp.php");
require_once("../controller/ControllerVendas.php");
?>

<!DOCTYPE HTML>
<html>

<body>
	<div class="container-contact100">	
		<div class="wrap-contact100">
			<form method="post" action="" id="form" name="form" class="contact100-form validate-form">			
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
					<select  type="SELECT"  id="produto" name="produto" >
					<option  value="" disabled selected>Selecione um produto</option>
						<?php new listaprodutoVendas(); ?>
					</select>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>	

				<div class="wrap-input100 validate-input" data-validate="Quantidade">
					<input class="input100" type="text"  id="quantidade" name="quantidade" placeholder="Informe quantidade">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				

				<div class="wrap-input100 validate-input" data-validate="Valor" >
					<input class="input100" type="text"  id="valor" name="valor" value="" readonly placeholder="Valor">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				
				<div class="wrap-input100 validate-input" data-validate="data">
					<input class="input100" type="date"  id="data" name="data" placeholder="Data">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>				

				<!-- <div class="wrap-input100 validate-input" data-validate = "Comissão é obrigatório">
					<input class="input100"  id="comissao" name="comissao" placeholder="Insira uma comissão"></input>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div> -->

				<div class="container-contact100-form-btn">											
						<button class="btn btn-success" type="button" onclick="validar()">Efetuar Venda</button>						
					</button>
				</div>
			</form>
		</div>
	</div>

	<script language="javascript" type="text/javascript">   
	
	document.addEventListener("keydown", function(e) {
		if(e.keyCode === 13) {	  
  		e.preventDefault();
		}

});	

	/**PEGA O VALOR DE ACORDO COM A SELEÇÃO DO produto */
	$('#produto').change(function (){
      var option = $(this).find("option:selected");
      var valor  = $(this).find(':selected').attr('valor');
	  $('#valor').val(valor);
	});

	/**TOTALIZA O VALOR DE ACORDO COM A QUANTIDADE E FORMATA O VALOR */
	$('#quantidade').change(function(){      
	var valor =  $('#valor').val();	
	var quant =  $('#quantidade').val();	
	var total = (valor * quant).toFixed(2);         
	$('#valor').val(total);
	});				 

	//CRIA A MASCARA PARA O CAMPO DATA	
	// $("#data").mask("99/99/9999");	
	 
	
        function validar() {						
			var vendedor = $("#vendedor option:selected").text();
			var produto = $("#produto option:selected").text();
			var quantidade = $('#quantidade').val();
			var data = $('#data').val();
				
			if (vendedor == 'Selecione um vendedor') {				
                    alert("Selecione um vendedor");
                    $('#vendedor').focus();
                    return false;
			}				
			if (produto == 'Selecione um produto') {				
                    alert("Selecione um produto");
                    $('#produto').focus();
                    return false;
			}	
			if(quantidade.length == 0) {
				alert("Informe uma quantidade");
                    $('#quantidade').focus();
                    return false;
			}			
			if(data.length == 0) {
				alert("Informe uma data");
                    $('#data').focus();
                    return false;
			}	
			/** OBTER ID_PRODUTO E ID_VENDEDOR */
			var id_produto  = $('#produto').find(':selected').attr('value');
			var id_vendedor  = $('#vendedor').find(':selected').attr('value');
			params = '?id_produto='+id_produto+'&id_vendedor='+id_vendedor;		
			window.location = "Index"+params
			
			/**ENVIA O FORMULÁRIO SE TUDO ESTIVER OK */
			form.action = '../controller/ControllerCadastroVenda.php'+params;
			form.submit();
		}
    
    </script>
</body>

</html>
