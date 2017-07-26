<?php include "php/cabecera.inc"?>
<br>
¿Ya eres usuario?<br>
<form action="php/logcliente.php" method="POST">
	<input type="text" name="usuario" placeholder="Introduce tu nombre de usuario">
	<input type="text" name="contrasena" placeholder="introduce tu contraseña">
	<input type="submit">
</form>

¿Eres nuevo usuario? <br>

<form action="php/nuevoclienteweb.php" method="POST">
	<input type="text" name="usuario" placeholder="usuario"><br>
	<input type="text" name="contrasena" placeholder="contraseña"><br>
	<input type="text" name="nombre" placeholder="nombre"><br>
	<input type="text" name="apellidos" placeholder="apellidos"><br>
	<input type="text" name="email" placeholder="E-mail"><br>
	<input type="submit">
</form>

<?php include "php/piedepagina.inc"?>