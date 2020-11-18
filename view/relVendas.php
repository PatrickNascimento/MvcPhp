<?php 
require_once("../controller/ControllerListarVendas.php");
require_once("../gulp.php");
require_once("../controller/ControllerVendas.php");
$filtro ='';
?>

<!DOCTYPE html>
<html lang="pt-br">
<body>
<span class="contact100-form-title-relatorio">
	Relatório de Vendas
</span>
   <div style='top: -300px'>
  
   <div class="filtro"> <!-- DIV FILTRO  -->
   <div style="margin-top : 50px; margin-left: 50px">
   <div style="margin-top : 50px;"></div>
   <br></br>
   <div class="wrap-periodo">
     Período   
   </div>
    <div class="wrap-input101 validate-input" data-validate="data">
            <input class="input100" type="date"  id="dataini" name="dataini" placeholder="Data">
    </div>	
    <div class="wrap-ate">
     até
   </div>
    <div class="wrap-input101 validate-input" data-validate="data">
                    <input class="input100" type="date"  id="datafim" name="datafim" placeholder="Data">                    									
    </div>
    <div class="wrap-vendas">	
      <div class="select ">
					<select  type="SELECT"  id="vendedor" name="vendedor">
					<option value="" disabled selected>Vendedor</option>
						<?php new listaVendedorVendas(); ?>
					</select>	
      </div>		
    </div>
    <div class="wrap-vendas">	
	<div class="select ">
					<select  type="SELECT"  id="produto" name="produto" >
					<option  value="" disabled selected>Produto</option>
						<?php new listaprodutoVendas(); ?>
					</select>					
    </div>	
</div>
<div class="">											
	<button class="btn btn-primary" type="button" onclick="validar()">Visualizar</button>						
</div>
</div>
<div> <!-- END DIV FILTRO  -->
    
    <div style='margin-bottom : 50px'></div>
    <table class="table-fill">
        <thead>
            <tr class="text-left">
                <th class="text-left" width="20%">Vendedor</th>
                <th class="text-left" width="20%">Produto</th>                
                <th class="text-center" width="15%">Data</th>                               
                <th class="text-center" width="15%">Valor</th>                               
                <th class="text-center" width="15%">Quantidade</th>                               
                <th class="text-center" width="10%">Comissão</th>                               
            </tr>
        </thead>
        <tbody>
            <?php try{                
                $filtro = $_GET['filtro'];
                $Conexao    = Conexao::getConnection();
                $query      = $Conexao->query("SELECT id_vendas, v.nome as vendedor, p.nome as produto, Data_venda,valor_venda, vendas.quantidade, v.comissao 
                                               FROM Vendas 
                                               JOIN produto p ON p.id_produto = vendas.id_produto
                                               JOIN vendedor v ON v.id_vendedor = vendas.id_vendedor 
                                               $filtro
                                               ");
                $produto   = $query->fetchAll();    
                foreach ($produto as $value){                        
                    echo '<tr>';
                    echo '<td  class="text-left">' .$value['vendedor']. '</td>';
                    echo '<td  class="text-left">' .$value['produto']. '</td>';            
                    echo '<td  class="text-center">' .$value['Data_venda']. '</td>';                        
                    echo '<td  class="text-right">' .$value['valor_venda']. '</td>';                        
                    echo '<td  class="text-center">' .$value['quantidade']. '</td>';                        
                    echo '<td  class="text-center">' .$value['comissao']. '%</td>';                        
                    echo '<td  class="text-center"> <a class="fa fa-trash" href="../controller/ControllerDeletarVenda.php?id='.$value["id_vendas"].'"</a></td>';            
                }                   
             
             }catch(Exception $e){
                echo $e->getMessage();
                exit;
             }
             ?>

        </tbody>
        <thead>
            <tr class="text-left">                
                <th class="text-left" width="30%">Total</th> 
                <th class="text-left" width="30%">

                <!--TOTAL DE VENDAS -->

                <?php try{                
                $filtro = $_GET['filtro'];
                $Conexao    = Conexao::getConnection();
                $query      = $Conexao->query("SELECT sum(valor_venda) as total 
                                               FROM Vendas 
                                               JOIN produto p ON p.id_produto = vendas.id_produto
                                               JOIN vendedor v ON v.id_vendedor = vendas.id_vendedor 
                                               $filtro
                                               ");
                $produto   = $query->fetchAll();    
                foreach ($produto as $value){                        
                  echo 'R$ ',number_format($value['total'],2);
                }                   
             
             }catch(Exception $e){
                echo $e->getMessage();
                exit;
             }
             ?>
             </th> 
            </tr>  
            </thead>            
        
            <tr 
            class="text-left">                
                <th class="text-left" width="30%">Total Comissão</th>       
                <th class="text-left" width="30%"> 
                
                <!--TOTAL DE COMISSÃO -->
                <?php try{                
                $filtro = $_GET['filtro'];
                $Conexao    = Conexao::getConnection();
                $query      = $Conexao->query("SELECT sum(v.comissao) as comissao 
                                               FROM Vendas 
                                               JOIN produto p ON p.id_produto = vendas.id_produto
                                               JOIN vendedor v ON v.id_vendedor = vendas.id_vendedor 
                                               $filtro
                                               ");
                $produto   = $query->fetchAll();    
                foreach ($produto as $value){                        
                  echo number_format($value['comissao'],2),' %' ;
                }                   
             
             }catch(Exception $e){
                echo $e->getMessage();
                exit;
             }
             ?>
             </th>                                                                                  
            </tr>            
        </thead>

    </table>  
    
    </div>
    <div style='margin-bottom : 150px'></div>

    <script language="javascript" type="text/javascript"> 
        function validar(){	 

            var params = ' WHERE ';
            var vendedor = $("#vendedor option:selected").text();
			var produto = $("#produto option:selected").text();			
            var dataini = $('#dataini').val();
            var datafim = $('#datafim').val();
            
            /**Filtro Vendedor*/
			if (vendedor != 'Vendedor') {		                
                var id_vendedor  = $('#vendedor').find(':selected').attr('value');                
                if (params != ' WHERE ') {
                    params += ' AND v.id_vendedor ='+id_vendedor;                
                } else {
                    params += ' v.id_vendedor ='+id_vendedor;                
                } 
            }			
            /**Filtro Produto*/
            if (produto != 'Produto') {		                
                var id_produto  = $('#produto').find(':selected').attr('value');                
                if (params != ' WHERE ') {
                    params += ' AND p.id_produto ='+id_produto;                
                } else {
                    params += ' p.id_produto ='+id_produto;                
                }
            }	

            /**Filtro Entre datas*/
            if ((dataini != '') && (datafim != '')) {		                                
                if (params != ' WHERE ') {
                    params += ' AND Vendas.Data_venda between '+dataini+' AND '+datafim;                
                } else {                    
                    params += ' Vendas.Data_venda between '+dataini+' AND '+datafim;                
                }
            }	

            /**Filtro Todos*/
            if ((produto == 'Produto') && (vendedor == 'Vendedor') && (dataini == '') && (datafim == '')) {
                params = '';
            }

            document.location='../view/menu.php?page=relVendas.php&filtro='+params
        }
        </script>
</body>
</html>
