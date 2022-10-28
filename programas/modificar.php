<!-- Validar campos -->
<script>
function validar(formulario)
{

if(formulario.txtcodigo.value=='')
{
alert('Sr Usuario debe ingresar el codigo');
formulario.txtcodigo.focus();
return false;
}
else if (isNaN(formulario.txtcodigo.value))
{
alert("El codigo ingresado no es un n�mero");
formulario.txtcodigo.focus();
return false;
}

if(formulario.txtnombre.value=='')
{
alert('Sr Usuario debe ingresar el(los) nombre(s)');
formulario.txtnombre.focus();
return false;
}
return true;
}
</script>

<?php
	include("..\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM producto WHERE producto.id_Prod =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de productos. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
        $Rs=mysqli_fetch_array($result)
?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualiza.php">
				
	<table width="400" border="1">

		<tr>
			<td width=50%>id producto</td>
				<td>
					<input name="txtcodigo" type="text" id="txtcodigo" size="5" value= "<?php echo $Rs['id_Prod'];?>"
				</td>
		</tr>

		<tr>	
			<td>nombre</td>
				<td>
					<input name="txtnombre" type="text" id="txtnombre" size="30" value= "<?php echo $Rs['producto_Nombre'];?>"
				</td>
		</tr>

		
		
		<tr>
			<td>Fecha de Vencimiento</td>
			<td>
				<input name="txtFechaVencimiento" type="text" id="txtFechaVencimiento" size="5" value= "<?php echo $Rs['producto_FechaVencimiento'];?>"
			</td>
    	</tr>
		
		<tr>
			<td width=50%>numero de referencia</td>
				<td>
					<input name="txtReferencia" type="text" id="txtReferencia" size="5" value= "<?php echo $Rs['producto_Referencia'];?>"
				</td>
		</tr>

		<tr>
			<td>Ubicacion</td>
			<td>
				<input name="txtUbicacion" type="text" id="txtUbicacion" size="12" value= "<?php echo $Rs['producto_Ubicacion'];?>"
		</tr>
			<tr>
			<td>Marca</td>
			<td>
				<input name="txtMarca" type="text" id="txtMarca" size="12" value= "<?php echo $Rs['producto_Marca'];?>"
			</tr>

		<tr>
			<td>Valor Compra</td>
				<td>
					<input name="txtValorCompra" type="text" id="txtValorCompra" size="12" value= "<?php echo $Rs['producto_ValorCompra'];?>"
				</td>
		</tr>

		<tr>
			<td>Valor Venta</td>
				<td>
				<input name="txtValorVenta" type="text" id="txtValorVenta" size="12" value= "<?php echo $Rs['producto_ValorVenta'];?>"
				</td>
		</tr>	
		<!-- llaves foraneas -->
    <tr>
    <td>Unidad de medida</td>
		<td> 
			<?php
			include("..\conexion.php");
			$query="select id_Medida , medida_Nombre  from medida";
			$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
			echo "<select name='txtMedida'>";
			echo  "<option selected value=0> --Seleccione una opcion-- </option>";
				while($row=mysqli_fetch_array($result))
				{
						if ($Rs['id_Medida2'] == $row[0])
						{
							echo "<option selected value= ".$row[0].">".$row[1]." </option>";	
						}else{
							echo "<option value= $row[0] >$row[1] </option>";						
						}        
				}       
			echo "</select>";	
			?>
		</td>
	</tr>

	<tr>
    <td>Categoria</td>
		<td> 
			<?php
			include("..\conexion.php");
			$query="select id_Cate, cate_Nombre from categoria";
			$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
			echo "<select name='txtCategoria'>";
			echo  "<option selected value=0> --Seleccione una opcion-- </option>";
				while($row=mysqli_fetch_array($result))
				{
						if ($Rs['id_Cate2'] == $row[0])
						{
							echo "<option selected value= ".$row[0].">".$row[1]." </option>";	
						}else{
							echo "<option value= $row[0] >$row[1] </option>";						
						}        
				}       
			echo "</select>";	
			?>
		</td>
		<!-- fin llaves foraneas  -->
		<!-- inicio botones -->
	</tr>
		<td>
		<center>
			<input type="submit" name="Submit" value="Enviar" />
			</center>
		</td>
		<td>
		<center>
			<input type="reset" name="Submit2" value="Restablecer" />
			</center>
		</td>
    </tr>
	</table>

<input type="hidden" name="Accion" value="Update" />	
			</form>
			</center>
<?php	
	}
	mysqli_close($link);
?>