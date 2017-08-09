<!DOCTYPE html>
<html>
<head>
	<title>Alumnos WIL</title>
	<meta charset="utf-8">
	<meta name="author" content="Jaime Limón Samperio">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style_alumnos.css">
	<script type="text/javascript" src="js/functions_alumnos.js"></script>
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
			<a href="#home" class="w3-bar-item w3-button w3-wide"><b>&ltWIL&gt</b> Alumnos</a>
			<!--Lado derecho del navbar-->
			<div class="w3-right w3-hide-medium w3-hide-small">
				<a href="#about" class="w3-bar-item w3-button"> INTRO</a>
				<a href="#html" class="w3-bar-item w3-button"><i class="fa fa-html5"></i> HTML</a>
				<a href="#css" class="w3-bar-item w3-button"><i class="fa fa-css3"></i> CSS</a>
				<a href="#js" class="w3-bar-item w3-button"><i class="fa fa-code"></i> JS</a>
				<a href="#terminal" class="w3-bar-item w3-button"><i class="fa fa-file-code-o"></i> Terminal</a>
				<a href="#php" class="w3-bar-item w3-button"><i class="fa fa-file-code-o"></i> PHP</a>
				<a href="#back" class="w3-bar-item w3-button" onclick="home()"><i class="fa fa-chevron-left"></i> HOME</a>
			</div>

			<!--Hide de barra derecha en pantallas pequeñas y se sustituye con un menu icon-->
			<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large" onclick="w3_open()"><i class="fa fa-bars"></i></a>
		</div>
	</nav>

	<!--Sidebar en pantallas pequeñas-->
	<nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-left w3 w3-hide-large" style="display: none" id="sideBar">
		<a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16 w3-right">X</a>
		<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">INTRO</a>
		<a href="#html" onclick="w3_close()" class="w3-bar-item w3-button">HTML</a>
		<a href="#css" onclick="w3_close()" class="w3-bar-item w3-button">CSS</a>
		<a href="#js" onclick="w3_close()" class="w3-bar-item w3-button">JS</a>
		<a href="#terminal" onclick="w3_close()" class="w3-bar-item w3-button">Terminal</a>
		<a href="#php" onclick="w3_close()" class="w3-bar-item w3-button">PHP</a>
		<a href="#" onclick="home()" class="w3-bar-item w3-button">HOME</a>
	</nav>

	<!--Header con background-->
	<header class="header w3-display-container" id="home">
		<div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
		    <i class="fa fa-facebook-official w3-hover-opacity"></i>
		    <i class="fa fa-instagram w3-hover-opacity"></i>
		    <i class="fa fa-twitter w3-hover-opacity"></i>
		    <i class="fa fa-snapchat w3-hover-opacity"></i>
  		</div>
	</header>

	<!--Sección con introducción-->
	<section class="w3-container" style="padding: 128px 16px" id="about">
		<h3 class="w3-center">INTRODUCCIÓN</h3>
		<p class="w3-center w3-large">Deberás realizar una guía de cada tema con los elementos que aprendas de los tutoriales de W3 Schools.<br> Con la finalidad de hacer tu curso más sencillo, hemos dejado ejemplos de las guías realizadas por otros alumnos.</p>
		<p class="w3-center w3-large">Recuerda que tus guías serán las herramientas a utilizar en los ejercicios posteriores.</p>
	</section>


	<!--Sección de tutoriales-->
	<section class="w3-container w3-grey" style="padding: 128px 16px" id="html">
		<section class="w3-row-padding">
			<article class="w3-col w3-half" style="padding-left: 50px">
			    <h2 class="w3-center w3-jumbo">HTML</h2>
			    <p class="w3-center"><a class="w3-button w3-green" href="https://www.w3schools.com/html/default.asp" target="_blank">Empieza el tutorial</a></p>
			</article>

			<article class="w3-half">
			    <h3>Ejemplos de guías HTML</h3>
				<ul style="list-style-type: none;">
					<li>Jaime: <a href="guias_HTML/html/guia_HTML.html" target="_blank">Enlace</a></li>
					<li>Andrés: <a href=""></a></li>
					<li>Alexis: <a href=""></a></li>
					<li>Paul: <a href=""></a></li>
				</ul>
				<p class="w3-panel w3-light-grey w3-leftbar w3-border-red">Las guías cuentan con estilos CSS. Darás estilo a tu guía hasta que termines el tutorial CSS.</p>
			</article>
		</section>
	</section>

	<section class="w3-container" style="padding: 128px 16px" id="css">
		<section class="w3-row-padding">
			<article class="w3-col w3-half" style="padding-left: 50px">
			    <h2 class="w3-center w3-jumbo">CSS</h2>
			    <p class="w3-center"><a class="w3-button w3-green" href="https://www.w3schools.com/css/default.asp" target="_blank">Empieza el tutorial</a></p>
			</article>

			<article class="w3-half">
			    <h3>Ejemplos de guías CSS</h3>
				<ul style="list-style-type: none;">
					<li>Jaime: <a href="guias_HTML/html/guia_HTML.html" target="_blank">Enlace</a></li>
					<li>Andrés: <a href=""></a></li>
					<li>Alexis: <a href=""></a></li>
					<li>Paul: <a href=""></a></li>
				</ul>
				<p class="w3-panel w3-light-grey w3-leftbar w3-border-red">Las guías cuentan con estilos CSS. Darás estilo a tu guía hasta que termines el tutorial CSS.</p>
			</article>
		</section>
	</section>

	<section class="w3-container w3-grey" style="padding: 128px 16px" id="js">
		<section class="w3-row-padding">
			<article class="w3-col w3-half" style="padding-left: 50px">
			    <h2 class="w3-center w3-jumbo">JavaScript</h2>
			    <p class="w3-center"><a class="w3-button w3-green" href="https://www.w3schools.com/js/default.asp" target="_blank">Empieza el tutorial</a></p>
			</article>

			<article class="w3-half">
			    <h3>Ejemplos de guías JS</h3>
				<ul style="list-style-type: none;">
					<li>Jaime: <a href="guias_HTML/html/guia_HTML.html" target="_blank">Enlace</a></li>
					<li>Andrés: <a href=""></a></li>
					<li>Alexis: <a href=""></a></li>
					<li>Paul: <a href=""></a></li>
				</ul>
				<p class="w3-panel w3-light-grey w3-leftbar w3-border-red">Las guías cuentan con estilos CSS. Darás estilo a tu guía hasta que termines el tutorial CSS.</p>
			</article>
		</section>
	</section>

	<section class="w3-container" style="padding: 128px 16px" id="terminal">
		<section class="w3-row-padding">
			<article class="w3-col w3-half" style="padding-left: 50px">
			    <h2 class="w3-center w3-jumbo">Terminal</h2>
			    <p class="w3-center"><a class="w3-button w3-green" href="https://www.w3schools.com/js/default.asp" target="_blank">Empieza el tutorial</a></p>
			</article>

			<article class="w3-half">
			    <h3>Ejemplos de guías Terminal</h3>
				<ul style="list-style-type: none;">
					<li>Jaime: <a href="guias_HTML/html/guia_HTML.html" target="_blank">Enlace</a></li>
					<li>Andrés: <a href=""></a></li>
					<li>Alexis: <a href=""></a></li>
					<li>Paul: <a href=""></a></li>
				</ul>
			</article>
		</section>
	</section>

	<section class="w3-container w3-grey" style="padding: 128px 16px" id="php">
		<section class="w3-row-padding">
			<article class="w3-col w3-half" style="padding-left: 50px">
			    <h2 class="w3-center w3-jumbo">PHP</h2>
			    <p class="w3-center"><a class="w3-button w3-green" href="https://www.w3schools.com/php/default.asp" target="_blank">Empieza el tutorial</a></p>
			</article>

			<article class="w3-half">
			    <h3>Ejemplos de guías PHP</h3>
				<ul style="list-style-type: none;">
					<li>Jaime: <a href="guias_HTML/html/guia_HTML.html" target="_blank">Enlace</a></li>
					<li>Andrés: <a href=""></a></li>
					<li>Alexis: <a href=""></a></li>
					<li>Paul: <a href=""></a></li>
				</ul>
			</article>
		</section>
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