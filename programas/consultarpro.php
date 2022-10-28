<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta de Productos</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA PRODUCTOS</h1>
<center>
<table width="900" border="1">
	<tr>
				<td>id</td>
				<td>nombre</td>
				<td>Fecha Vencimiento</td>
				<td>Referencia</td>
				<td>Ubicacion</td>
				<td>Marca</td>
				<td>Valor compra</td>
				<td>PROValor venta</td>
				<td>medida</td>
				<td>categoria</td>
		</tr>
	<?php
		include("..\conexion.php");
		$codigo=$_POST["txtcodigo"];
		$query = "SELECT `id_Prod`, `producto_Nombre`, `producto_FechaVencimiento`, `producto_Referencia`, `producto_Ubicacion`, `producto_Marca`, `producto_ValorCompra`, `producto_ValorVenta`, `id_Medida2`, `id_Cate2` 
		FROM producto
				INNER JOIN medida ON producto.ID_MEDIDA2=medida.ID_MEDIDA
				INNER JOIN categoria ON producto.ID_CATE2=categoria.ID_CATE
				where producto.ID_PROD=$codigo
				order by 1";

		// $result=mysql_query($query,$link) or die("error en la consulta de productos"); en versiones anteriores
		$result=mysqli_query($link,$query) or die("error en la consulta de productos");
		// if(mysql_num_rows($result)>0)
		if(mysqli_num_rows($result)>0)	
		{
			// while($row=mysql_fetch_array($result))
			while($row=mysqli_fetch_array($result))	
			{
			echo "<tr>";
			echo "<td>$row[0]</td>
				<td>$row[1]</td>
				<td>$row[2]</td>
				<td>$row[3]</td>
				<td>$row[4]</td>
				<td>$row[5]</td>
				<td>$row[6]</td>
				<td>$row[7]</td>
				<td>$row[8]</td>
				<td>$row[9]</td>";
			echo "</tr>";
			}
		}
		else
		{
			echo"La consulta no encontro registros asociados";
		}

		echo " <script>
			function redireccionar()
			{
				var pagina='../index.html';
				location.href=pagina
			}
			setTimeout ('redireccionar()', 50000);
		       </script>
		";
	?>
</table>
</body>
</html>