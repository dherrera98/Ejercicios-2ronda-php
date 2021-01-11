<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <title>consulta2</title>
 <meta name="GENERATOR" content="Quanta Plus">
 <meta http-equiv="Content-Type" content="text/html; charset=iso8859-1">
</head>
<body>
<?php
$linea1="SELECT * FROM empresas ORDER BY sector, karma DESC";
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
echo
"<TR><TD>Nombre</TD><TD>Web</TD><TD>Telef.</TD><TD>Sector</TD><TD>
Descrip.</TD><TD>Karma</TD></TR>";
for ($i=0;$i<mysqli_num_rows($result);$i++)
{
$row = mysqli_fetch_assoc($result);

if (isset($_POST["cambio"]) && $_POST["cambio"] && ($i % 2))
echo "<TR bgcolor='#B6B7B7'>";
else
echo "<TR bgcolor='white'>";
print("<TD>".$row["nombre"]."</TD>");
print("<TD>".$row["web"]."</TD>");
print("<TD>".$row["telef"]."</TD>");
print("<TD>".$row["sector"]."</TD>");
print("<TD>".$row["descrip"]."</TD>");
print("<TD>".$row["karma"]."</TD>");
echo "</TR>";
}
echo "</TABLE>";
echo "</CENTER>";
mysqli_close($link);
?>
</body>
</html>
