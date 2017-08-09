<!DOCTYPE html>
<html>
<head>
	<title>Wil challenge</title>
	<meta charset="utf-8">
	<meta name="author" content="Jaime Limón Samperio">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="{{ URL::asset('js/functions.js') }}"></script>
	<link href="https://fonts.googleapis.com/css?family=Zilla+Slab" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

	<!--Navbar en fullscreen-->
	<nav class="w3-top">
		<div class="w3-bar w3-white w3-card-2" id="navBar">
			<a href="#home" class="w3-bar-item w3-button w3-wide"><b>&ltWIL&gt</b></a>
			<!--Lado derecho del navbar-->
			<div class="w3-right w3-hide-medium w3-hide-small">
				<a href="#about" class="w3-bar-item w3-button"> ABOUT</a>
				<a href="#ventajas" class="w3-bar-item w3-button"><i class="fa fa-check-circle"></i> VENTAJAS</a>
				<a href="#ingresa" class="w3-bar-item w3-button" onclick="displayForm()"><i class="fa fa-sign-in"></i> INGRESAR</a>
				<a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> EQUIPO</a>
				<a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACTO</a>
			</div>

			<!--Hide de barra derecha en pantallas pequeñas y se sustituye con un menu icon-->
			<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large" onclick="w3_open()"><i class="fa fa-bars"></i></a>
		</div>
	</nav>

	<!--Sidebar en pantallas pequeñas-->
	<nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-left w3 w3-hide-large" style="display: none" id="sideBar">
		<a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16 w3-right">X</a>
		<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
		<a href="#ventajas" onclick="w3_close()" class="w3-bar-item w3-button">VENTAJAS</a>
		<a href="#ingresa" onclick="displayForm()" class="w3-bar-item w3-button">INGRESAR</a>
		<a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">EQUIPO</a>
		<a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACTO</a>
	</nav>

	<!--Modal de autenticación-->
	<section class="w3-modal" id="form">
		<div class="w3-modal-content w3-animate-zoom" style="width: 50%">
			<form class="w3-container w3-card-4 w3-light-grey" action="ingreso"
				method="POST">
				{{ csrf_field() }}
				<h2 class="w3-center">INGRESA</h2>
				<p class="w3-button w3-red w3-display-topright" onclick="hideForm()" style="margin-right: 18px">x</p>
				<section class="w3-row w3-section">
					<div class="w3-col" style="width: 50px"><i class="w3-xxlarge fa fa-user"></i></div>
					<div class="w3-rest">
						<input type="text" id="txUsu" class="w3-input w3-border" placeholder="Usuario" name="txUsu">
					</div>
				</section>
				<section class="w3-row w3-section">
					<div class="w3-col" style="width: 50px"><i class="w3-xxlarge fa fa-key"></i></div>
					<div class="w3-rest">
						<input type="text" id="txCont" class="w3-input w3-border" placeholder="Contraseña" name="txCont">
					</div>
				</section>
				<section class="w3-row w3-center w3-margin">
					<button type="submit" class="w3-button w3-green" >Aceptar</button>
				</section>
			</form>
		</div>
	</section>

	<!--Header con background-->
	<header class="header w3-display-container" id="home">
		<div class="w3-text-black w3-display-topmiddle" style="padding: 75px">
			<span class="w3-xlarge w3-hide-small">Empieza a programar tus páginas web</span><br>
		</div>

		<div class="w3-text-black w3-hide-medium w3-hide-large w3-display-topmiddle" style="padding: 60px">
			<span class="w3-xlarge">Empieza a programar</span><br>
		</div>

		<div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
		    <i class="fa fa-facebook-official w3-hover-opacity"></i>
		    <i class="fa fa-instagram w3-hover-opacity"></i>
		    <i class="fa fa-twitter w3-hover-opacity"></i>
		    <i class="fa fa-snapchat w3-hover-opacity"></i>
  		</div>
	</header>

	<!--Sección con breve info sobre el laboratorio-->
	<section class="w3-container" style="padding: 128px 16px" id="about">
		<h3 class="w3-center">SOBRE EL LABORATORIO</h3>
		<p class="w3-center w3-large">Algo de lo que aprenderás</p>
		<article class="w3-row-padding w3-center" style="margin-top: 64px">
			<div class="w3-quarter">
				<i class="fa fa-html5 w3-margin-bottom w3-jumbo w3-center"></i>
			    <p class="w3-large">HTML</p>
			    <p>Siglas para HyperText Markup Language. Es el lenguaje que da vida al contenido de toda página web.</p>
			</div>
			<div class="w3-quarter">
				<i class="fa fa-css3 w3-margin-bottom w3-jumbo w3-center"></i>
			    <p class="w3-large">CSS</p>
			    <p>Cascading Style Sheets es el lenguaje que describe el estilo de todo documento HTML.</p>
			</div>
			<div class="w3-quarter">
				<i class="fa fa-code w3-margin-bottom w3-jumbo w3-center"></i>
			    <p class="w3-large">JavaScript</p>
			    <p>El lenguaje de programación para HTML y la Web. </p>
			</div>
			<div class="w3-quarter">
				<i class="fa fa-file-code-o w3-margin-bottom w3-jumbo w3-center"></i>
			    <p class="w3-large">PHP</p>
			    <p>Hypertext Preprocessor es un lenguaje de código abierto que puede ser incustado en HTML.</p>
			</div>
		</article>
	</section>

	<!--Sección de ventajas-->
	<section class="w3-container w3-light-grey" style="padding: 128px 16px;" id="ventajas">
		<div class="w3-row-padding">
			<article class="w3-col m6" style="padding-left: 50px">
				<h3>Ventajas de Wil.</h3>
				<ul>
					<li>No necesitas experiencia previa</li>
					<li>Libera tu servicio social</li>
					<li>Elige el tiempo que quieras dedicar</li>
					<li>Trabaja de acuerdo a tu horario</li>
				</ul>
				<p style="padding-top: 20px"><a href="#contact" class="w3-button w3-black">Únete ahora</a></p>
			</article>
			<div class="w3-col m6">
				<img class="w3-image" alt="maqueta" src="images/maqueta.jpg" width="700" height="394">
			</div>
		</div>
	</section>

	<!--Sección de equipo-->
	<section class="w3-container" style="padding: 128px 16px" id="team">
		<h3 class="w3-center">EL EQUIPO</h3>
		<p class="w3-center w3-large">Los que hacen Wil posible</p>
		<div class="w3-row-padding w3-greyscale" style="margin-top: 64px;">
			<div class="w3-col l3 m6 w3-margin-bottom">
				<article class="w3-card-2">
					<img class="team" src="images/cara.jpg" alt="Victor" style="width: 100%">
					<div class="w3-container">
						<h3>Victor ...</h3>
						<p class="w3-opacity">Co-Founder</p>
						<p>Fundador de Wil junto con Emiliano...</p>
					</div>
				</article>
			</div>
			<div class="w3-col l3 m6 w3-margin-bottom">
				<article class="w3-card-2">
					<img class="team" src="images/cara.jpg" alt="Emiliano" style="width: 100%">
					<div class="w3-container">
						<h3>Emiliano ...</h3>
						<p class="w3-opacity">Co-Founder</p>
						<p>Fundador de Wil junto con Emiliano...</p>
					</div>
				</article>
			</div>
			<div class="w3-col l3 m6 w3-margin-bottom">
				<article class="w3-card-2">
					<img class="team" src="images/cara.jpg" alt="Jaime" style="width: 100%">
					<div class="w3-container">
						<h3>Jaime ...</h3>
						<p class="w3-opacity">Co-Founder</p>
						<p>Fundador de Wil junto con Emiliano...</p>
					</div>
				</article>
			</div>
			<div class="w3-col l3 m6 w3-margin-bottom">
				<article class="w3-card-2">
					<img class="team" src="images/cara.jpg" alt="Andrés" style="width: 100%">
					<div class="w3-container">
						<h3>Andrés ...</h3>
						<p class="w3-opacity">Co-Founder</p>
						<p>Fundador de Wil junto con Emiliano...</p>
					</div>
				</article>
			</div>
		</div>
	</section>

	<!--Contacto-->
	<section class="w3-container w3-light-grey" style="padding: 120px 16px" id="contact">
		<h3 class="w3-center">CONTACTO</h3>
		<div class="w3-row-padding" style="margin-top: 60px">
			<div class="w3-half" style="padding-left: 50px">
				<p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> ITAM (Río Hondo), Ciudad de México </p>

				<p class="w3-xlarge" style="margin: 60px 0 10px 0;">Jaime</p>
				<p><i class="fa fa-mobile fa-fw w3-xxlarge w3-margin-right"></i> Celular: 55 31 45 44 15 </p>
				<p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"></i> Email: jlimons@itam.mx</p>

				<p class="w3-xlarge" style="margin: 60px 0 10px 0;">Andrés</p>
				<p><i class="fa fa-mobile fa-fw w3-xxlarge w3-margin-right"></i> Celular: 55 31 45 44 15 </p>
				<p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"></i> Email: andres@itam.mx</p>
			</div>
			<div class="w3-half">
		      	<img src="images/map.png" style="width: 100%">
    		</div>
		</div>
	</section>

	<!--Footer-->
	<footer class="w3-center w3-black w3-padding-64">
		<a href="#home" class="w3-button w3-light-grey /"><i class="fa fa-arrow-up w3-margin-right"></i>Arriba</a>
		<section class="w3-xlarge w3-section">
			<i class="fa fa-facebook-official w3-hover-opacity"></i>
		    <i class="fa fa-instagram w3-hover-opacity"></i>
		    <i class="fa fa-snapchat w3-hover-opacity"></i>
		    <i class="fa fa-twitter w3-hover-opacity"></i>
		</section>
	</footer>


</body>
</html>