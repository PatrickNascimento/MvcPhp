<?php

?>
<html>
<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
<body>
	<div >	

		<div>
            <form method="post" action="" id="form" name="form">
				<span>
					Cadastro de Vendedor
				</span>				
					<input type="text"  id="nome" name="nome" placeholder="Nome vendedor">
				    <div class="">					
						<button type="button" onclick="validar()" >Gravar</button>						
					</button>
				</div>
			</form>
		</d
		iv>
	</div>

    <script>    
        function validar() {			
            
            
            var nome = $('#nome').val();
            console.log(nome);            
            console.log(nome.length);

                // if ((nome.length == 0)) {
                //     alert("Preencha o campo nome ");
                //     nome.focus();
                //     return false;
                // }

            //console.log(nome.length);
            //console.log('teste');   
            //console.log(nome.value);  
            //formulario.submit();
    
        }
    </script>
</body>
</html>
