 <?php

 session_start();


 if (isset( $_SESSION['nombre_usuario']) && $_SESSION['nombre_usuario'] == true){
$nombre_usuario =  $_SESSION['nombre_usuario'];
$cargo_usuario  =  $_SESSION['cargo_usuario'];
$rut_usuario =  $_SESSION['rut_usuario'];
$idSup =  $_SESSION['idSup'];
} else {

   header("Location:index.php");
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
							<a class="active" href="gestionarempleados.php"><i class="fa fa-users nav_icon"></i>Gestionar Empleados </a>
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
							<a href="ayuda.php"><i class="fa fa-question-circle nav_icon"></i>Ayuda <span class="fa arrow"></span></a>
						</li>

				         <li>
							<a href="#" data-toggle="modal" data-target="#exit" ><i class="fa fa-sign-out nav_icon"></i>Salir</a> 
						</li>
					</ul>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>

        <!-- exit modal -->

		
								<div id="exit" class="modal fade" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title"><span class="fa fa-question-circle nav_icon"></span> Salir</h4>
										</div>
										<div class="modal-body">
											<p>¿ Esta seguro que desea salir ?</p>
										</div>
										<div class="modal-footer">
											<button onclick="location.href='cerrarsesion.php';" type="button" class="btn btn-danger" data-dismiss="modal">Si</button>
											<button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
										</div>
										</div>

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
								 <?php if($cargo_usuario == "administrador"){ ?>
                                  <li> <a href="perfil.php?rut=<?php echo $rut_usuario ?>" ><i class="fa fa-user"></i> Perfil</a> </li>
								<?php }  ?>
								<li> <a href="#" data-toggle="modal" data-target="#exit" ><i class="fa fa-sign-out"></i> Cerrar Sesion</a> </li>
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

    include ("conex.php");

    $query = "SELECT * FROM empleado WHERE (cargo='personal' OR cargo='bloqueado') AND idSup=$idSup";
	$datos=mysqli_query($conex,$query);
    
	echo "<div class='tables'>";
	echo "<h3 class='title1'>Listado de Empleados :</h3>";
    echo "<div class='panel-body widget-shadow'>";
	echo "<table class='table'>";
    echo "<button onClick='window.location=\"agregarempleado.php\";'/ class='btn btn-success add-prod'>
				             <span class='fa fa-plus'></span>  
									  Agregar Empleado
							 </button>";

	echo "<thead><tr><th>Rut</th><th>Nombre</th><th>Apellido</th><th class='action'>Accion</th></thead>";



	while($fila=mysqli_fetch_assoc($datos))
		{   

			
			echo "<tbody>";
            echo "<tr title='informacion detallada' class='selector-empleado' >";
            echo "<td class='selector' data-toggle='modal' data-target='#infodetallada".$fila['rut']."' >".$fila["rut"]."</td>";
		    echo "<td class='selector' data-toggle='modal' data-target='#infodetallada".$fila['rut']."' >".$fila["nombre"]."</td>";
			echo "<td class='selector' data-toggle='modal' data-target='#infodetallada".$fila['rut']."' >".$fila["apellido"]."</td>";
			echo "<td class='buttons-admin'><button onClick='window.location=\"modificarempleado.php?rut=".$fila["rut"]."\";'/ title='modificar empleado' class='btn btn-primary btn-admin1'><span class='fa fa-refresh'></span></button>
			</button><button onClick='window.location=\"desactivarempleado.php?rut=".$fila["rut"]."\";'/ title='Activar/Desactivar empleado' class='btn btn-success btn-admin3'>".(($fila['cargo'] =='personal')?'<span class="fa fa-ban"></span>' : "<span class='fa fa-check'></span>")."</button>
			<button  onClick='window.location=\"eliminarempleado.php?rut=".$fila["rut"]."\";'/ title='eliminar empleado' class='btn btn-danger btn-admin2'>
			<span class='fa fa-times'></span></td>";
		    echo "</tr>";
			echo "</tbody>";


            //modal

 

            echo "<div class='modal fade' id='infodetallada".$fila['rut']."' role='dialog'>";
			echo  "<div class='modal-dialog'>";
	
			echo  "<div class='modal-content'>";
			echo  "<div class='modal-header'>";
			echo   "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
			echo    "<h4 class='modal-title'>Informacion detallada :</h4>";
			echo "</div>";
			echo "<div class='modal-body'>";
			echo  "<b>Rut : </b>" .$fila["rut"]."<br>";
			echo  "<b>Nombre : </b>" .$fila["nombre"]."<br>";
			echo  "<b>Apellido : </b>" .$fila["apellido"]."<br>";
			echo  "<b>Cargo : </b>" .$fila["cargo"]."<br>";
	      	echo  "<b>Correo : </b>" .$fila["correo"]."<br>";
			echo  "<b>Contraseña : </b> ************";
			echo "</div>";
			echo "<div class='modal-footer'>";
			echo "<button onClick='window.location=\"modificarempleado.php?rut=".$fila["rut"]."\";'/  class='btn btn-primary'><span class='fa fa-refresh'></span> Modificar</button>";
			echo "<button onClick='window.location=\"desactivarempleado.php?rut=".$fila["rut"]."\";'/ title='Activar/Desactivar empleado' class='btn btn-success'>".(($fila['cargo'] =='personal')?'<span class="fa fa-ban"></span> Desactivar' : "<span class='fa fa-check'></span> Activar")."</button>";
			echo "<button onClick='window.location=\"eliminarempleado.php?rut=".$fila["rut"]."\";'/  class='btn btn-danger'><span class='fa fa-times'></span> Eliminar </button>";
			echo  "<button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>";
			echo "</div>";
			echo "</div>";
		
			echo "</div>";
			echo "</div>";
 
		  

 
		}

		    echo "</table>";
		    echo "</div>";
			echo "</div>";
			echo "</div>";
            echo "<div class='clearfix'></div>";
			echo "</div>";
		    echo "</div>";

		mysqli_close($conex);
      
?>       


 

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
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   <script src="js/script-ps.js"></script>
</body>
</html>