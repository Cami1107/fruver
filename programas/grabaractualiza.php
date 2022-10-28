<?php
   /*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */
	   
	include("..\conexion.php");
	$accion=$_POST["Accion"];

	if(isset($accion))
	{
		if($accion=="Update")
		{
			//echo"Enviado desde actualizaci�n";
			// txtcodigo es la llave principal de la tabla

			$query="UPDATE producto
					SET producto_Nombre = '".$_POST['txtnombre']."',
						producto_FechaVencimiento = '".$_POST['txtFechaVencimiento']."',
						producto_Referencia = '".$_POST['txtReferencia']."',
						producto_Ubicacion = '".$_POST['txtUbicacion']."',
						producto_Marca = '".$_POST['txtMarca']."',
						producto_ValorCompra = '".$_POST['txtValorCompra']."',
						producto_ValorVenta = '".$_POST['txtValorVenta']."',

						id_Medida2 = '".$_POST['txtMedida']."',
						id_Cate2 = '".$_POST['txtCategoria']."'
						WHERE producto.id_Prod = '".$_POST['txtcodigo']."'";

			$result=mysqli_query($link,$query) or die ("Error en la actualizacion de los datos. Error: ".mysqli_error());
		
			echo "<script>
					alert('Los datos fueron actualizados correctamente');
					location.href='../index1.html';
					</script>";
		}
		else
		{
			
			$query="DELETE 
					FROM producto
					WHERE id_Prod = '".$_POST['txtcodigo']."'";
			$result=mysqli_query($link,$query) or die ("Error en el borrado de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron borrados correctamente');
					location.href='../index1.html';
					</script>";
		}
	}
?>