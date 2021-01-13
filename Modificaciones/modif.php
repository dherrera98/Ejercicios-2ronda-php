<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <title>modif1</title>
 <meta name="GENERATOR" content="Quanta Plus">
 <meta http-equiv="Content-Type" content="text/html; charset=iso8859-1">
</head>
<body>
<?php
$linea1 = "SELECT * FROM empresas ";
$consulta = $linea1;
//echo $consulta;
if (!$link = mysqli_connect('localhost', 'root', ''))
{
    echo "<a href=index.html>Error al conectar</a>";
    exit;
}
if (!mysqli_select_db($link, "buscador"))
{
    echo "<a href=index.html>Error al seleccionar BDD</a>";
    exit;
}
if (!$result = mysqli_query($link, $consulta))
{
    echo "<a href=index.html>Error en la consulta</a>";
    exit;
}
echo "<h2>Seleccione empresa/s a dar modificar</h2>";
echo "<CENTER>";
echo "<FORM ACTION=modif2.php METHOD=POST>";
echo "<TABLE BORDER=1>";
for ($i = 0;$i < mysqli_num_rows($result);$i++)
{
    $row = mysqli_fetch_assoc($result);

    $id = $row["id"];
    $nombre = $row["nombre"];
    echo "<TR><TD><INPUT type='radio' name='modif'
value='$id'></TD><TD>$nombre</TD></TR>";
}
echo "</TABLE>";
echo "<INPUT type='submit' value='Modif'>";
echo "</FORM>";
echo "</CENTER>";
mysqli_close($link);
?>
</body>
</html>
