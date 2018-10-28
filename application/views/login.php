<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<base href="<?php echo base_url();?>" />
	<title><?php echo $this->config->item('company') . ' | OSPOS ' . $this->config->item('application_version')  . ' | ' .  $this->lang->line('login_login'); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo 'dist/bootswatch/' . (empty($this->config->item('theme')) ? 'flatly' : $this->config->item('theme')) . '/bootstrap.min.css' ?>"/>
	<!-- start css template tags -->
	<link rel="stylesheet" type="text/css" href="dist/login.css"/>
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- ION ICONS STYLES -->
	<link href="assets/css/ionicons.css" rel="stylesheet" />
	<!-- FONT AWESOME ICONS STYLES -->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<!-- FANCYBOX POPUP STYLES -->
	<link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
	<!-- STYLES FOR VIEWPORT ANIMATION -->
	<link href="assets/css/animations.min.css" rel="stylesheet" />
	<!-- CUSTOM CSS -->
	<link href="assets/css/style-solid-red.css" rel="stylesheet" />
	<!-- end css template tags -->
</head>
<body data-spy="scroll" data-target="#menu-section">
<!--MENU SECTION START-->
<div class="navbar navbar-inverse navbar-fixed-top scroll-me" id="menu-section" >
<div class="container">
<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
<a class="navbar-brand" href="#">

PosVen

</a>
</div>
<div class="navbar-collapse collapse">
	<ul class="nav navbar-nav navbar-right">
		<li><a href="#home">NOSOTROS</a></li>
		<li><a href="#services">SERVICIOS</a></li>
		<li><a href="#pricing">TARIFAS</a></li>
		<li><a href="#work">PORTAFOLIO</a></li>
		<li><a href="#team">EQUIPO</a></li>
		<li><a href="#contact">CONTACTO</a>
		<li><a href="registro_PosVen">REGISTRO</a></li>
	</ul>
</div>


</div>
</div>
<body><br></br>
	<div id="logo" align="center"><img src="<?php echo base_url();?>/images/logo.png"></div>

	<div id="login">
		<?php echo form_open('login') ?>
			<div id="container">
				<div align="center" style="color:red"><?php echo validation_errors(); ?></div>
				
				<div id="login_form">
					<div class="input-group">
						<span class="input-group-addon input-sm"><span class="glyphicon glyphicon-user"></span></span>
						<input class="form-control" placeholder="<?php echo $this->lang->line('login_username')?>" name="username" type="username" size=20 autofocus></input>
					</div><br>				
					<div class="input-group">
						<span class="input-group-addon input-sm"><span class="glyphicon glyphicon-lock"></span></span>
						<input class="form-control" placeholder="<?php echo $this->lang->line('login_password')?>" name="password" type="password" size=20></input>
					</div>
					
					<input class="btn btn-primary btn-block" type="submit" name="loginButton" value="Siguiente"/>
				</div>
			</div>
		<?php echo form_close(); ?>
		
		<h1>Punto de Venta <?php echo $this->config->item('application_version'); ?></h1>
	</div>
</body>

<div id="home" >
<div class="container">
<div class="row">
<div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
<div id="carousel-slider" data-ride="carousel" class="carousel slide  animate-in" data-anim-type="fade-in-up">

<div class="carousel-inner">
<div class="item active">

<h3>
La mejor manera de hacer ventas en la actualidad
</h3>
<p>
Gestiona tus ventas desde un solo módulo esto te permite 
llevar un registro más específico de las facturas, 
además de descontar los productos del inventario de manera automática.
</p>
</div>
<div class="item">
<h3>
Administra tu negocio desde una tablet
</h3>
<p>
Cuenta con un diseño flexible y dinámico que te permite controlar tu negocio desde cualquier lugar y en cualquier momento. 
Puedes revisar la información de tu empresa a través de una tablet y saber como esta funcionando tu comercio. 
</p>
</div>
<div class="item">
<h3>
Hardware POS
</h3>
<p>
Es compatible con cualquier computador o dispositivo móvil. 
Ademas puedes conectar cualquier impresora POS láser, de tinta continua o paralela,
así como cualquier lector de código de barras y cajón monedero.
</p>
</div>

</div>


</div>


</div>
</div>
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">


<p >
Contactenos

</p>
<div class="social">
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-facebook "></i></a>
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-twitter"></i></a>
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-google-plus "></i></a>
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-linkedin "></i></a>
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-pinterest "></i></a>
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-github "></i></a>
</div>
<a href="registro_PosVen" class=" btn button-custom btn-custom-two">Registrarse </a>
</div>
</div>
</div>

</div>
<!--HOME SECTION END-->
<!--SERVICE SECTION START-->
<section id="services" >
<div class="container">
<div class="row text-center header">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
<h3>Nuestros Servicios</h3>
<hr />
</div>
</div>
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-ios-printer-outline"></i>
<h3>Facturacion</h3>
Genera facturas o recibos de compra personalizados con tu logo, cumpliendo con las normas vigentes.
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-ios-telephone-outline"></i>
<h3>Atencion al Cliente</h3>
Proporcionamos diferentes canales para que puedas comunicarte para recibas una respuesta con la menor brevedad posible.
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-clipboard"></i>
<h3>Inventario</h3>
Controla el inventario de múltiples almacenes o bodegas. Agrupar productos en combos hará que sea más sencillo y atractivo venderlos.
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-card"></i>
<h3>GiftCard</h3>
Tus compradores podrán recibir tarjetas de regalo, premiendo su fidelidad, que podran compartir con sus seres queridos. 
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-cloud"></i>
<h3>Control en la Nube</h3>
Inicia sesión y trabaja desde donde quieras. Tus ventas, movimientos de inventario y los informes estarán siempre a la mano.
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-monitor"></i>
<h3>Funciona en Cualquier Dispositivo</h3>
Todo lo que necesita es conexión a Internet. Incluso puede trabajar con el hardware que ya posee sin tener que invertir en nuevos equipos.
</div>
</div>
</div>
</div>
</section>
<!--SERVICE SECTION END-->
<!--PRICING SECTION START-->
<section id="pricing" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h3>Tarifas</h3>
<hr />
</div>
</div>
<div class="row pad-bottom animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
<div class="row db-padding-btm db-attached">
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="light-pricing">
<div class="price">
<sup>Bs</sup>10.000
<small>por mes</small>
</div>
<div class="type">
BASICO
</div>
<ul>

<li><i class="glyphicon glyphicon-print"></i>1 Cuenta </li>
<li><i class="glyphicon glyphicon-time"></i>150+ Projects </li>
<li><i class="glyphicon glyphicon-trash"></i>No Personalizable</li>
</ul>
<div class="pricing-footer">

<a href="#" class="btn button-custom btn-custom-one">Cotizar</a>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="light-pricing popular">
<div class="price">
<sup>Bs</sup>25.000
<small>por mes</small>
</div>
<div class="type">
MEDIO
</div>
<ul>

<li><i class="glyphicon glyphicon-print"></i>5 Cuentas </li>
<li><i class="glyphicon glyphicon-time"></i>150 Projects </li>
<li><i class="glyphicon glyphicon-trash"></i>Personalezable</li>
</ul>
<div class="pricing-footer">

<a href="#" class="btn button-custom btn-custom-one">Cotizar</a>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="light-pricing">
<div class="price">
<sup>Bs</sup>45.000
<small>por mes</small>
</div>
<div class="type">
AVANZADO
</div>
<ul>

<li><i class="glyphicon glyphicon-print"></i>10 Cuentas </li>
<li><i class="glyphicon glyphicon-time"></i>150 Projects </li>
<li><i class="glyphicon glyphicon-trash"></i>Personalizable</li>
</ul>
<div class="pricing-footer">

<a href="#" class="btn button-custom btn-custom-one">Cotizar</a>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="light-pricing">
<div class="price">
<sup>Bs</sup>75.000
<small>por mes</small>
</div>
<div class="type">
EMPRESARIAL
</div>
<ul>

<li><i class="glyphicon glyphicon-print"></i>Ilimitadas Cuentas </li>
<li><i class="glyphicon glyphicon-time"></i>150 Projects </li>
<li><i class="glyphicon glyphicon-trash"></i>Personalizable</li>
</ul>
<div class="pricing-footer">

<a href="#" class="btn button-custom btn-custom-one">Cotizar</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
<div class="row db-padding-btm db-attached">
</div>
</div>
</div>
</div>
</section>
<!--PRIICING SECTION END-->
<!--WORK SECTION START-->
<section id="work" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h3>Ejemplos de Negocio</h3>
<hr />
</div>
</div>
<div class="row text-center animate-in" data-anim-type="fade-in-up" >
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pad-bottom">
<div class="caegories">
<a href="#" data-filter="*" class="active btn btn-custom btn-custom-two btn-sm">Todos</a>
<a href="#" data-filter=".html" class="btn btn-custom btn-custom-two btn-sm">Moda y Calzado</a>
<a href="#" data-filter=".css" class="btn btn-custom btn-custom-two btn-sm">Salud</a>
<a href="#" data-filter=".code" class="btn btn-custom btn-custom-two btn-sm" >Comida</a>
<a href="#" data-filter=".script" class="btn btn-custom btn-custom-two btn-sm" >Tecnologia</a>
<a href="#" data-filter=".script" class="btn btn-custom btn-custom-two btn-sm" >Mercado</a>
<a href="#" data-filter=".script" class="btn btn-custom btn-custom-two btn-sm" >Otros</a>
</div>
</div>
</div>
<div class="row text-center animate-in" data-anim-type="fade-in-up" id="work-div">

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 html">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="assets/img/portfolio/1.jpg">

<img src="assets/img/portfolio/1.jpg" class="img-responsive img-rounded" alt="" />
</a>

<h4>Morbi mollis lectus et ipsum</h4>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 html css">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="assets/img/portfolio/2.jpg">

<img src="assets/img/portfolio/2.jpg" class="img-responsive img-rounded" alt="" />
</a>

<h4>Morbi mollis lectus et ipsum</h4>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 code script">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="assets/img/portfolio/3.jpg">

<img src="assets/img/portfolio/3.jpg" class="img-responsive img-rounded" alt="" />
</a>

<h4>Morbi mollis lectus et ipsum</h4>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 html script">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="assets/img/portfolio/4.jpg">

<img src="assets/img/portfolio/4.jpg" class="img-responsive img-rounded" alt="" />
</a>

<h4>Morbi mollis lectus et ipsum</h4>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 html code">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="assets/img/portfolio/5.jpg">

<img src="assets/img/portfolio/5.jpg" class="img-responsive img-rounded" alt="" />
</a>

<h4>Morbi mollis lectus et ipsum</h4>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 script">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="assets/img/portfolio/6.jpg">

<img src="assets/img/portfolio/6.jpg" class="img-responsive img-rounded" alt="" />
</a>

<h4>Morbi mollis lectus et ipsum</h4>
</div>
</div>
</div>
</div>
</section>
<!--WORK SECTION END-->
<!--TEAM SECTION START-->
<section id="team" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h3>Equipo </h3>
<hr />
</div>
</div>
<div class="row animate-in" data-anim-type="fade-in-up">

<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('assets/img/team/1.jpg')" >
<a href="#" target="_blank" > <i class="fa fa-twitter" ></i></a>
</div>
<div class="description">
<h3> Nelson Perez</h3>
<h5> <strong> Developer & Designer </strong></h5>
<p>
Pellentesque elementum dapibus convallis.
Vivamus eget finibus massa.
</p>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('assets/img/team/2.jpg')" >
<a href="#" target="_blank" > <i class="fa fa-twitter" ></i></a>
</div>
<div class="description">
<h3> Josnel Blanco</h3>
<h5> <strong> Developer & Designer </strong></h5>
<p>
Pellentesque elementum dapibus convallis.
Vivamus eget finibus massa.
</p>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('assets/img/team/3.jpg')" >
<a href="#" target="_blank" > <i class="fa fa-twitter" ></i></a>
</div>
<div class="description">
<h3> Alexis España</h3>
<h5> <strong> Developer & Designer </strong></h5>
<p>
Pellentesque elementum dapibus convallis.
Vivamus eget finibus massa.
</p>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('assets/img/team/4.jpg')" >
<a href="#" target="_blank" > <i class="fa fa-twitter" ></i></a>
</div>
<div class="description">
<h3> Leomarid Jona</h3>
<h5> <strong> Developer & Designer </strong></h5>
<p>
Pellentesque elementum dapibus convallis.
Vivamus eget finibus massa.
</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!--TEAM SECTION END-->

<!--CONTACT SECTION START-->
<section id="contact" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<h3>Contacto</h3>
<hr />

</div>
</div>

<div class="row animate-in" data-anim-type="fade-in-up">

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="contact-wrapper">
<h3>Redes Sociales</h3>
<p>
Aliquam tempus ante placerat,
consectetur tellus nec, porttitor nulla.
</p>
<div class="social-below">
<a href="#" class="btn button-custom btn-custom-two" > Facebook</a>
<a href="#" class="btn button-custom btn-custom-two" > Twitter</a>
<a href="#" class="btn button-custom btn-custom-two" > Google +</a>
</div>
</div>

</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="contact-wrapper">
<h3>Contacto</h3>
<h4><strong>Email : </strong> ineyet@gmail.com </h4>
<h4><strong>Telefono : </strong> +58 4123797063 </h4>
<h4><strong>Skype : </strong> ineyet </h4>
</div>

</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="contact-wrapper">
<h3>Direccion : </h3>
<h4>230/45 , Caracas , </h4>
<h4>Venezuela</h4>
<div class="footer-div" >
&copy; 2016 | <a href="http://www.designbootstrap.com/" target="_blank" >por pyaroa Soluciones</a>
</div>
</div>

</div>

</div>


</div>
</section>
<!--CONTACT SECTION END-->

<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME -->
<!-- CORE JQUERY -->
<script src="assets/js/jquery-1.11.1.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.js"></script>
<!-- EASING SCROLL SCRIPTS PLUGIN -->
<script src="assets/js/vegas/jquery.vegas.min.js"></script>
<!-- VEGAS SLIDESHOW SCRIPTS -->
<script src="assets/js/jquery.easing.min.js"></script>
<!-- FANCYBOX PLUGIN -->
<script src="assets/js/source/jquery.fancybox.js"></script>
<!-- ISOTOPE SCRIPTS -->
<script src="assets/js/jquery.isotope.js"></script>
<!-- VIEWPORT ANIMATION SCRIPTS   -->
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/animations.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
</body>

</html>

</html>
