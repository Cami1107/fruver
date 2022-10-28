<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */
if ($_POST){
$id_Prod=$_POST['txtcodigo'];
$producto_Nombre=$_POST['txtnombre'];
$producto_FechaVencimiento=$_POST['datefecha']; 
$producto_Referencia=$_POST['txtreferencia']; 
$producto_Ubicacion=$_POST['txtubicacion'];
$producto_Marca=$_POST['txtmarca'];
$producto_ValorCompra=$_POST['txtcompra'];
$producto_ValorVenta=$_POST['txtventa'];
// llaves foraneas
$id_Medida2 =$_POST["txtMedida2"];
$id_Cate2 =$_POST["txtCate2"];

include("..\conexion.php");

$query = "INSERT INTO `producto`(`id_Prod`, `producto_Nombre`, `producto_FechaVencimiento`, `producto_Referencia`, `producto_Ubicacion`, `producto_Marca`, `producto_ValorCompra`, `producto_ValorVenta`, `id_Medida2`, `id_Cate2`) VALUES ('$id_Prod','$producto_Nombre','$producto_FechaVencimiento','$producto_Referencia','$producto_Ubicacion','$producto_Marca','$producto_ValorCompra','$producto_ValorVenta','$id_Medida2','$id_Cate2')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../index1.html';

</script>";
}else{
   echo "No paso la primera validación, F";
}

?>

