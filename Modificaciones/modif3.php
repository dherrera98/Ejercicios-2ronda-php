<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <title>modif3</title>
 <meta name="GENERATOR" content="Quanta Plus">
 <meta http-equiv="Content-Type" content="text/html; charset=iso8859-1">
</head>
<body>
<?php
$linea1="UPDATE empresas ";
$linea2=" SET nombre='$_POST[nombre]', web='$_POST[web]', telef='$_POST[telef]',
sector='$_POST[sector]', descrip='$_POST[descrip]', karma='$_POST[karma]' ";
$linea3=" WHERE id='$_POST[id]' ";
$consulta=$linea1.$linea2.$linea3;
echo $consulta;
if ( ! $link=mysqli_connect('localhost','root',''))
{
echo "<a href=index.html>Error al conectar</a>";
exit ;
}
if ( ! mysqli_select_db($link, "buscador"))
{
 echo "<a href=index.html>Error al seleccionar BDD</a>";
 exit;
}
if ( ! $result=mysqli_query($link, $consulta))
{
echo "<a href=index.html>Error en la consulta</a>";
exit;
}
echo "<br>Modificacion correcta";
echo "<br><br><a href='modif.php'>Otra modificacion</a>";
echo "<br><br><a href='index.html'>Inicio</a>";
mysqli_close($link);
?>
</body>
</html>
