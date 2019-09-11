 <?php

 session_start();


if (isset( $_SESSION['nombre_usuario']) && $_SESSION['nombre_usuario'] ){//&& $_SESSION['idSup'] == true
$nombre_usuario =  $_SESSION['nombre_usuario'];
$cargo_usuario  =  $_SESSION['cargo_usuario'];
$idSup = $_SESSION['idSup'];

unset($_SESSION["check"]);
} else {

   header("Location:index.php");
}

 if (isset($_SESSION["mensaje"])){
$mensaje = $_SESSION["mensaje"];
} else {
$mensaje = "";

}


?>

 <!DOCTYPE HTML>
<html>
<head>
	<title>Admin Panel SpeedoMart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- font CSS -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<!-- js-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<!--webfonts-->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<!--//webfonts--> 
	<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
	<!--//end-animate-->
	<!-- chart -->
	<script src="js/Chart.js"></script>
	<!-- //chart -->
	<!--Calender-->
	<link rel="stylesheet" href="css/clndr.css" type="text/css" />
	<script src="js/underscore-min.js" type="text/javascript"></script>
	<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
	<script src="js/clndr.js" type="text/javascript"></script>
	<script src="js/site.js" type="text/javascript"></script>
	<!--End Calender-->
	<!-- Metis Menu -->
	<script src="js/metisMenu.min.js"></script>
	<script src="js/custom.js"></script>
	<link href="css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="home.php"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						
						   <?php 
						    if($cargo_usuario == 'administrador'){
					        ?>
 
						<li>
							<a href="gestionarproductos.php"><i class="fa fa-tag nav_icon"></i>Gestionar Productos<span class="fa arrow"></span></a>
						</li>
						<li>
							<a href="gestionarempleados.php"><i class="fa fa-users nav_icon"></i>Gestionar Empleados </a>
						</li>
						
                         <?php } else{ ?>
						 
						  	<li>
							<a href="#"><i class="fa fa-shopping-cart nav_icon"></i>Gestionar Compras </a>
						    </li>
			 

						  <?php }  ?>
						 
						
					     <li>
							<a href="#"><i class="fa fa-cogs nav_icon"></i>Opciones <span class="nav-badge">12</span> <span class="fa arrow"></span></a>
						</li>
					    
						<li>
							<a href="#"><i class="fa fa-question-circle nav_icon"></i>Ayuda <span class="fa arrow"></span></a>
						</li>

						<li>
							<a href="cerrarsesion.php"><i class="fa fa-sign-out nav_icon"></i>Salir</a>
						</li>
					</ul>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="index.html">
						<h1>SpeedoMart</h1>
						<span>AdminPanel</span>
					</a>
				</div>
				<!--//logo-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">1</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>Tienes 1 mensaje</h3>
									</div>
								</li>
								<li><a href="#">
								   <div class="user_img"><img src="images/1.png" alt=""></div>
								   <div class="notification_desc">
									<p>Te damos la bienvenida a </br>Admin Panel SpeedoMart...</p>
									<p><span>hace 5 min.</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								
								<li>
									<div class="notification_bottom">
										<a href="#">Ver todos los mensajes</a>
									</div> 
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">1</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>Tienes 1 notificacion</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="user_img"><img src="images/2.png" alt=""></div>
								   <div class="notification_desc">
									<p>SpeedoMart esta en correcto <br> funcionamiento...</p>
									<p><span>Hace 5 min.</span></p>
									</div>
								  <div class="clearfix"></div>	
								 </a></li>
									<div class="notification_bottom">
										<a href="#">Ver todas las notificaciones</a>
									</div> 
								</li>
							</ul>
						</li>	
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>Tareas</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Database update</span><span class="percentage">40%</span>
										<div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										<div class="bar yellow" style="width:40%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar green" style="width:90%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
										<div class="clearfix"></div>	
									</div>
								   <div class="progress progress-striped active">
										 <div class="bar red" style="width: 33%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar  blue" style="width: 80%;"></div>
									</div>
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">Ver todas las tareas</a>
									</div> 
								</li>
							</ul>
						</li>	
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/defect/user.png" alt=""> </span> 
									<div class="user-name">
										<p><?php echo "".$nombre_usuario.""; ?></p>
										<span><?php echo "".$cargo_usuario.""; ?></span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Opciones</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> Perfil</a> </li> 
								<li> <a href="cerrarsesion.php"><i class="fa fa-sign-out"></i> Cerrar Sesion</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="row-one">

	
					<div class="col-md-4 widget">
						<div class="stats-left ">
							<h5>Hoy</h5>
							<h4>Ventas</h4>
						</div>
						<div class="stats-right">
							<label> 45</label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-mdl">
						<div class="stats-left">
							<h5>Hoy</h5>
							<h4>Visitas</h4>
						</div>
						<div class="stats-right">
							<label>80</label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
							<h5>Today</h5>
							<h4>Pedidos</h4>
						</div>
						<div class="stats-right">
							<label>51</label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="clearfix"> </div>	
				</div>
             	
			<br>

         <?php	

 

include('conex.php');
			if (isset($_GET["codigo_barra"])){  

				$codigobarra=$_GET["codigo_barra"];
				$nombre_prncontrado;
				$imagen_prencontrado;
				$descripcion_prencontrado;
				$precio_prencontrado;
				$stock_prencontrado; 
				$categoria_prencontrado;
				
				
				$query= "SELECT producto.idProducto, producto.nombre,
								producto.imagen, producto.descripcion,
								producto.precio, stock_prod.stock, categoria.nombreCAT, producto.idCategoria, stock_prod.ubicacion
								FROM producto INNER JOIN stock_prod 
								ON stock_prod.idSup = $idSup AND stock_prod.idStock_prod = producto.stock
								INNER JOIN categoria ON categoria.idCategoria = producto.idCategoria WHERE producto.codigo_barra = '$codigobarra'";

				$query2= "SELECT * FROM categoria";

				$datos=mysqli_query($conex,$query);
				$categorias=mysqli_query($conex, $query2);

				if($fila=mysqli_fetch_assoc($datos)){
					$id_producto = $fila["idProducto"];
					$nombre_prencontrado = $fila["nombre"];
					$imagen_prencontrado = $fila["imagen"];
					$descripcion_prencontrado= $fila["descripcion"];
					$ubicacion_prencontrado= $fila["ubicacion"];
					$precio_prencontrado= $fila["precio"];
					$stock_prencontrado= $fila["stock"];
					$categoria_prencontrado= $fila["nombreCAT"];
					$idCategoria = $fila["idCategoria"];
				}mysqli_close($conex);
				}else{echo "";}



		?>


         	<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							 <h3>Formulario  modificacion de Producto :</h3>
                             <button onclick="location.href='gestionarproductos.php';" class="btn btn-default back-btn"><span class="fa fa-chevron-left"></span> Volver atras</button>
						</div>
						<div class="form-body">
							<form action="procesarmodificarproducto.php" method="post" enctype="multipart/form-data"> 
								<div class="form-group">
									<input type="hidden" class="form-control" id="id" name="id" placeholder="id" value="<?php echo($id_producto) ?>">           
								</div>
								<div class="form-group">
									<label for="codigo_barra">Codigo Barra</label> 
									<input type="text" class="form-control" id="codigo_barra" name="codigo_barra" placeholder="Codigo de Barra" disabled  value="<?php             
										if(isset($codigobarra)){
											echo "".$codigobarra.""; 
											$_SESSION["codbarra"] = $codigobarra;
										}else{echo "";}
									?>">
								</div>
								<div class="form-group">
									<label for="nombre">Nombre</label> 
									<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" required="" value="<?php             
										if(isset($nombre_prencontrado)){
											echo "".$nombre_prencontrado.""; 
										}else{echo "";}
									?>">
								</div>
								<div class="form-group"> 
									<label for="imagen">Imagen</label>
									<input type="file" id="imagen" name="imagen" ><p class="help-block">Tamaño Max. 1MB.</p> 
                                   
                                   <img src='<?php 
										if (isset($imagen_prencontrado)){                   
										echo "".$imagen_prencontrado.""; 
										}else{ echo "";}
									    ?>' width='100px' height='100px'>
                                     
                                    	<div class="form-group">
										Conservar imagen <input type="checkbox" name="imagenconservada" value="on"      
										<?php						

											if(isset($_POST['submit']))
											{
												$_SESSION["check"]= "yes";
											}
										
										?>>
										</div>
										

																		

									  
									    
								</div>
								<div class="form-group"> 
									<label for="descripcion">Descripcion</label>
									<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese descripcion" required="" value="<?php  
										if (isset($descripcion_prencontrado)){
											echo "".$descripcion_prencontrado.""; 
									}else{echo "";}
								?>"> 
								</div>
								<div class="form-group"> 
									<label for="ubicacion">Ubicacion</label>
									<input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="Ingrese ubicacion" required="" value="<?php  
										if (isset($ubicacion_prencontrado)){
											echo "".$ubicacion_prencontrado.""; 
									}else{echo "";}
								?>"> 
								</div>
								<div class="form-group"> 
									<label for="precio">Precio</label>
									<input type="text" class="form-control" id="precio" name="precio" placeholder="Ingrese precio" required=""  onkeypress="return controltag(event)" value="<?php  
										if (isset($precio_prencontrado)){
											echo "".$precio_prencontrado.""; 
									}else{echo "";}
								?>"> 
								</div>
								<div class="form-group"> 
									<label for="stock">stock</label>
									<input type="text" class="form-control" id="stock" name="stock" placeholder="Ingrese stock" required="" onkeypress="return controltag(event)"  value="<?php  
										if (isset($stock_prencontrado)){
											echo "".$stock_prencontrado.""; 
								}else{echo "";}
								?>"> 
								</div>
								<div class="form-group"> 
									<label for="categoria">Categoria:<br></label> 
									<select class="form-control" name="categoria">
									 <?php 
										while($categ=mysqli_fetch_assoc($categorias)) {
											$idCAT = $categ['idCategoria'];
											$nombreCAT = $categ['nombreCAT'];
											if($idCAT == $idCategoria){ 
												echo("<option value='$idCAT'selected>$nombreCAT</option>");
											}else{
												echo("<option value='$idCAT'>$nombreCAT</option>");
											}}
									 ?>
									</select>
								</div>
								   <button type="submit" name="submit" class="btn btn-success"<?php
                                     
                                    if (!isset($codigobarra)){ ?>

                                       disabled <?php } ?> 
                                       
                                    >  Enviar</button>                   
                                    <button disabled type="reset" class="btn btn-primary">Limpiar</button>
						</div>
					</div>
   	             </div>
   	             
              <?php
if (isset($mensaje)) {

if($mensaje!=NULL){
 echo "<div class='row'><div class='col-md-4 col-md-offset-4'><div class='alert alert-info alert-personalizada'  role='alert'>" .$mensaje. "</div></div></div>" ;
 unset($_SESSION["mensaje"]);
}
} else {
 echo "";
}
 ?>
         	</div>


 
		<!--footer-->
		<div class="footer"> 
			 <p>&copy; 2017 SpeedoMart Admin Panel. Todos los derechos reservados.</p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>

		<script type="text/javascript"> function controltag(e) {

        tecla = (document.all) ? e.keyCode : e.which;

        if (tecla==8) return true;

        else if (tecla==0||tecla==9)  return true;

       // patron =/[0-9\s]/;// -> solo letras

        patron =/[0-9\s]/;// -> solo numeros

        te = String.fromCharCode(tecla);

        return patron.test(te);

    }

	</script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   <script src="js/script-ps.js"></script>
</body>
</html>