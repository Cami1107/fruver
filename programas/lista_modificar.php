<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include("..\conexion.php");
	$query="Select * From producto
	Order by id_Prod";
	$result=mysqli_query($link,$query) or die("Error en la consulta de producto. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<tr>
				<td>ID PROD</td>
				<td>NOMBRE</td>
				<td>FECHA VENCIMIENTO</td>
				<td>REFERENCIA</td>
				<td>UBICACION</td>
				<td>MARCA</td>
				<td>VALOR COMPRA</td>
				<td>VALOR VENTA</td>
				<td>MEDIDA</td>
				<td>CATEGORIA</td>

			</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					"<td>".$Rs['id_Prod']."</td>".
					"<td>".$Rs['producto_Nombre']."</td>".
					"<td>".$Rs['producto_FechaVencimiento']."</td>".
					"<td>".$Rs['producto_Referencia']."</td>".
					"<td>".$Rs['producto_Ubicacion']."</td>".
					"<td>".$Rs['producto_Marca']."</td>".
					"<td>".$Rs['producto_ValorCompra']."</td>".
					"<td>".$Rs['producto_ValorVenta']."</td>".
					"<td>".$Rs['id_Medida2']."</td>".
					"<td>".$Rs['id_Cate2']."</td>".
					"<td><a href=modificar.php?Codigo=".$Rs['id_Prod'].">Actualizar/</a>
					<a href=eliminar.php?Codigo=".$Rs['id_Prod'].">Eliminar</a></td>".
					"</tr>";
			}
	}
	else
	{
		echo"No hay productos registrados para listar";
	}
	mysqli_close($link);
	?>
	</table>
</center>	
</html>