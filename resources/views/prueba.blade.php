<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Esta es la primer ruta</h1>

<form action="ingreso" method="POST">
{{ csrf_field() }}
Nombre
<input type="text" name="nombre">
Contraseña
<input type="text" name="pswd">
<input type="submit" name="">

 </form>



</body>
</html>