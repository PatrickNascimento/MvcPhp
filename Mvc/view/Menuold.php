<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Sistema de Vendas</title>
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container demo-3">				
			</header>
			<div class="main clearfix">				
				<div class="column">
					<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li>
								<a href="#">Menu Principal</a>
								<ul class="dl-submenu">
									<li>
										<a href="#">Produtos</a>
										<ul class="dl-submenu">
											<li><a href="#">Cadastro de produto</a></li>
											<li><a href="#">Relatório de produtos</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Vendas</a>
										<ul class="dl-submenu">
											<li><a href="#">Nova Venda</a></li>
											<li><a href="#">Relatório de Vendas</a></li>											
										</ul>
									</li>
									<li>
										<a href="#">Vendedores</a>
										<ul class="dl-submenu">
											<li><a href="./cadastroVendedor.php">Cadastro de Vendedores</a></li>
											<li><a href="./relVendedor.php">Relatório de vendedores</a></li>
										</ul>
									</li>
								</ul>
							</li>						
					</div><!-- /dl-menuwrapper -->
				</div>
			</div>
		</div><!-- /container -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.dlmenu.js"></script>
		<script>
			$(function() {
				$( '#dl-menu' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-3', classout : 'dl-animate-out-3' }
				});
			});
		</script>
	</body>
</html>