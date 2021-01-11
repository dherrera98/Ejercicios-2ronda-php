<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <title>consulta4</title>
 <meta name="GENERATOR" content="Quanta Plus">
 <meta http-equiv="Content-Type" content="text/html; charset=iso8859-1">
</head>
<body>
<?php
function enlace ($campo, $orden, $actual)
{
if (strcmp($campo,$actual))
$rdo= "<A href='consulta4.php?campo=$actual&orden=ASC'>".ucfirst($actual)."</A>";
else
if ( ! strcmp($orden,"ASC"))
$rdo="<A href='consulta4.php?campo=$actual&orden=DESC'>".ucfirst($actual)."</A>";
else
$rdo="<A href='consulta4.php?campo=$actual&orden=ASC'>".ucfirst($actual)."</A>";
return $rdo;
}
if ( ! isset ($_POST["campo"]))
$linea1="SELECT * FROM empresas ORDER BY nombre";
else
$linea1="SELECT * FROM empresas ORDER BY $_POST[campo] $_POST[orden]";
$consulta=$linea1;
//echo $consulta;
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
echo "<h2>Empresas</h2>";
echo "<CENTER>";
echo "<TABLE BORDER=1>";
echo "<TR>";
print ("<TD>".enlace('campo', 'orden', "nombre")."</TD>");
print ("<TD>".enlace('campo', 'orden', "web")."</TD>");
print ("<TD>".enlace('campo', 'orden', "telef")."</TD>");
print ("<TD>".enlace('campo', 'orden', "sector")."</TD>");
print ("<TD>".enlace('campo', 'orden', "descrip")."</TD>");
print ("<TD>".enlace('campo', 'orden', "karma")."</TD>");
echo "</TR>";
for ($i=0;$i<mysqli_num_rows($result);$i++)
{
  $row = mysqli_fetch_assoc($result);

echo "<TR>";
$nombre=$row["nombre"];
echo "<TD>$nombre</TD>";
$web=$row["web"];
echo "<TD>$web</TD>";
$telef=$row["telef"];
echo "<TD>$telef</TD>";
$sector=$row["sector"];
echo "<TD>$sector</TD>";
$descrip=$row["descrip"];
echo "<TD>$descrip</TD>";
$karma=$row["karma"];
echo "<TD>$karma</TD>";
echo "</TR>";
}
echo "</TABLE>";
echo "</CENTER>";
mysqli_close($link);
?>
</body>
</html>