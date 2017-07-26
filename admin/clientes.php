<?php include "cabecera.inc";?>
<?php include "../php/config.inc" ?>
<table>
<?php
$contador = 0;
$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
mysqli_set_charset($conexion, "utf8");
$peticion = "SELECT * FROM clientes ";
$resultado = mysqli_query($conexion, $peticion);
while($fila = mysqli_fetch_array($resultado)) {
		
	echo '<tr';
	if($contador == 1){echo " class='sombreado' ";}
	echo'>';
			
	
	echo'
	<form action="actualizarcliente.php?id='.$fila['id'].'" method="POST">
	<td><input type="text" name="nombre" value="'.$fila['nombre'].'"><input type="text" name="apellidos" value="'.$fila['apellidos'].'"></td>
	<td><input type="text" name="email" value="'.$fila['email'].'"></td>
	<td><input type="text" name="usuario" value="'.$fila['usuario'].'"></td>
	<td><input type="text" name="contrasena" value="'.$fila['contrasena'].'"></td>
	<td><input type="text" name="telefono" value="'.$fila['telefono'].'"></td>
	<td><input type="text" name="movil" value="'.$fila['movil'].'"></td>
	<td><input type="text" name="fax" value="'.$fila['fax'].'"></td>
	<td><input type="text" name="direccioncalle" value="'.$fila['direccioncalle'].'"></td>
	<td><input type="text" name="codigopostal" value="'.$fila['codigopostal'].'"></td>
	<td><input type="text" name="poblacion" value="'.$fila['poblacion'].'"></td>
	<td><input type="text" name="pais" value="'.$fila['pais'].'"></td>
	<td><input type="text" name="dninif" value="'.$fila['dninif'].'"></td>
		
		

	<td><input class="boton" type="submit" value="Actualizar"></td>
	</form>
	<td><a href="eliminarcliente.php?id='.$fila['id'].'"><button>Eliminar</button></a></td>
		
	<tr>';
	if($contador == 0){$contador++;}else{$contador--;}
}
mysqli_close($conexion);
?>
	<tr>
		<form action="nuevocliente.php" method="POST">
			<td><input type="text" name="nombre" ><input type="text" name="apellidos"></td>
	<td><input type="text" name="email" ></td>
	<td><input type="text" name="usuario" ></td>
	<td><input type="text" name="contrasena" ></td>
	<td><input type="text" name="telefono" ></td>
	<td><input type="text" name="movil" ></td>
	<td><input type="text" name="fax" ></td>
	<td><input type="text" name="direccioncalle" ></td>
	<td><input type="text" name="codigopostal"></td>
	<td><input type="text" name="poblacion"></td>
	<td><input type="text" name="pais"></td>
	<td><input type="text" name="dninif"></td>
			<td><input type="submit" class="boton" ></td>
		<td></td>
		</form>
	</tr>
</table>
<?php include "piedepagina.inc";?>