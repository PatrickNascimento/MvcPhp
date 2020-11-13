
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Vendas Engeplus</title>		
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li>
								<li>
									<a class="gn-icon gn-icon-article">Vendedores</a>
									<ul class="gn-submenu">
										<li><a href="menu.php?page=cadastroVendedor.php" class="gn-icon gn-icon-archive">Cadastrar Vendedor</a></li>
										<li><a href="menu.php?page=relVendedor.php" class="gn-icon gn-icon-archive">Relatório de vendedores</a></li>
									</ul>
								</li>
								<li>
									<a class="gn-icon gn-icon-article">Produtos/Serviços</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-archive">Cadastrar Produto</a></li>
										<li><a class="gn-icon gn-icon-archive">Relatório de Produtos</a></li>
									</ul>
								</li>
								<li>
									<a class="gn-icon gn-icon-article">Vendedores</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-archive">Cadastrar Vendedor</a></li>
										<li><a class="gn-icon gn-icon-archive">Relatório de vendedores</a></li>
									</ul>
								</li>
								
						</div><!-- /gn-scroller -->					</nav>
				</li>				
				<li><a class="codrops-icon codrops-icon-drop" href="menu.php"><span>Voltar para Engeplus</span></a></li>
			</ul>
			<div class="pageloader">
				<?php
				if (empty($_REQUEST['page'])){					
					echo '<img src="./images/logo.png" style=" display: block; margin-left: auto; margin-right: auto; width: 20%; margin-top: 100px;" alt="Engeplus">';
				}
				?>				
				<?php 
				$url = "";

				if (!empty($_REQUEST['page'])){
					$url = $_REQUEST['page'];
				}				

				if ($url !== ""){
					include($url);
				}
				?>
			</div> <!-- PageLoader -->
			
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>