<!DOCTYPE HTML>
<?php

 session_start();


 if (isset($_SESSION["mensaje_error"])){
$mensaje_error = $_SESSION["mensaje_error"];
} else {
$mensaje_error = "";

}

?>
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
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
			<div class="sticky-header header-section ">
			<div class="header-left">
				<!--logo -->
				<div class="logo">
					<a href="#">
						<h1>SpeedoMart</h1>
						<span>AdminPanel</span>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>	
		</div>  

		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h3 class="title1">Login</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<h4>Bienvenido al <b>AdminPanel</b> de SpeedoMart</h4>
					</div>
					<div class="login-body">
						<form action="validarlogin.php">
							<input type="text" class="user" name="rut" placeholder="Ingrese RUT" required="">
							<input type="password" name="password" class="lock" placeholder="Contraseña" required="">
							<input type="submit" name="Sign In" value="Entrar">
							<div class="forgot-grid">
								<div class="forgot">
									<a href="#">Olvido su contraseña ?</a>
								</div>
								<div class="help">
									 <a href="#">Necesitas Ayuda ?</a>	
								</div>
								<div class="clearfix"> </div>
							</div>
						</form>
					</div>
				</div>
			</div>
 <?php
if (isset($mensaje_error)) {

if($mensaje_error!=NULL){
 echo "<div class='row'><div class='col-md-4 col-md-offset-4'><div class='alert alert-danger alert-personalizada'  role='alert'>" .$mensaje_error. "</div></div></div>" ;
 session_destroy();
}
} else {
 echo "";
}
 ?>

		</div>

		<!--footer-->
		<div class="footer-login">
		  <p>&copy; 2017 SpeedoMart Admin Panel. Todos los derechos reservados.</p>
		</div>
        <!--//footer-->
	</div> 
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   <script src="js/script-ps.js"></script>
</body>
</html>
 