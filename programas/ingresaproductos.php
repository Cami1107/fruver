<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Registro de Productos</title>

  <script>
    // inicio de validaciones
    function validar(formulario)
    {

    if(formulario.txtcodigo.value=='')
    {
    alert('Sr Usuario debe ingresar el codigo');
    formulario.txtcodigo.focus();
    return false;
    }

    if (isNaN(formulario.txtcodigo.value))
    {
    alert("El codigo ingresado no es un n�mero");
    formulario.txtcodigo.focus();
    formulario.txtcodigo.value='';
    return false;
    }

    if(formulario.txtnombre.value=='')
    {
    alert('Sr Usuario debe ingresar la descripcion');
    formulario.txtnombre.focus();
    return false;
    }

    if(formulario.txtcantidad.value=='')
    {
    alert('Sr Usuario debe ingresar la cantidad');
    formulario.txtcantidad.focus();
    formulario.txtcantidad.value='';
    return false;
    }

    if(formulario.txtvalor.value=='')
    {
    alert('Sr Usuario debe ingresar un valor');
    formulario.txtvalor.focus();
    formulario.txtvalor.value='';
    return false;
    }



    if(formulario.cmbundmedida.value==0)
    {
    alert('Sr Usuario debe seleccionar una unidad de medida');
    formulario.cmbundmedida.focus();
    return false;
    }

    return true;
    }
  // fin validaciones
</script>

<h1 ALIGN=CENTER>ENTRA DATOS DE PRODUCTOS</h1>
</head>

<body>
  <center>
  <form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarproductos.php">
    <table width="400" border="1">
      <tr>
        <td width=50%>CODIGO</td>
          <td>
            <input name="txtcodigo" type="text" id="txtcodigo" size=5/>
          </td>
      </tr>
      
      <tr>
        <td width=50%>NOMBRE</td>
          <td>
            <input name="txtnombre" type="text" id="txtnombre" size=5/>
          </td>
      </tr>

      <tr>
        <td width=50%>FECHA DE VENCIMIENTO</td>
          <td>
            <input name="datefecha" type=date id="datefecha" size=5/>
          </td>
      </tr>

      <tr>
        <td>REFERENCIA</td>
          <td>
            <input name="txtreferencia" type="text" id="txtreferencia" size=30/>
          </td>
      </tr>

      <tr>
        <td>UBICACION</td>
          <td>
            <input name="txtubicacion" type="text" id="txtubicacion" size=30/>
          </td>
      </tr>

      <tr>
        <td>MARCA</td>
          <td>
            <input name="txtmarca" type="text" id="txtmarca" size=30/>
          </td>
      </tr>

    <tr>
        <td>VALOR COMPRA</td>
          <td>
            <input name="txtcompra" type="text" id="txtcompra" size=5/>
          </td>
      </tr>

    <tr>
        <td>VALOR VENTA</td>
          <td>
            <input name="txtventa" type="text" id="txtventa" size=12/>
          </td>
      </tr>
    <tr>

    <tr>
      <td>UNIDAD DE MEDIDA</td>
        <td> <?php
        include("..\conexion.php");
        $query="select ID_MEDIDA, MEDIDA_NOMBRE from medida";
        $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
      
        echo "<select name='txtMedida2'>";
        echo  "<option selected value=0> --Seleccione una opcion-- </option>";
        
        while($row=mysqli_fetch_array($result))
        {
                        echo  "<option value=$row[0]> $row[1] </option>";
                    }
            
        echo "</select>";	
        ?></td>
      </tr>

      <tr>
      
        <td>CATEGORIA</td>
        <td> <?php
      include("..\conexion.php");
      $query="select ID_CATE, CATE_NOMBRE from CATEGORIA";
      $result=mysqli_query($link,$query) or die ("error en la consulta de programa");

      echo "<select name='txtCate2'>";
      echo  "<option selected value=0> --Seleccione una opcion-- </option>";
      
      while($row=mysqli_fetch_array($result))
      {
                      echo  "<option value=$row[0]> $row[1] </option>";
                  }
          
      echo "</select>";	
      ?></td>
      </tr>
    
  
      <tr>
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
  </form>
  </center>

</body>
</html>
