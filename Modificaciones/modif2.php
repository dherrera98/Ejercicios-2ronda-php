<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <title>modif2</title>
 <meta name="GENERATOR" content="Quanta Plus">
 <meta http-equiv="Content-Type" content="text/html; charset=iso8859-1">
</head>
<body>
<?php
$linea1 = "SELECT * FROM empresas ";
$linea2 = " WHERE id='$_POST[modif]' ";
$consulta = $linea1 . $linea2;
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
$row = mysqli_fetch_assoc($result);
?>
<h2>Modif de empresa</h2>
<center>
<FORM action='modif3.php' method='POST'>
<TABLE border=0>
<TR>
<TD>Nombre</TD>
<TD><INPUT type='text' name='nombre' size='30' maxlength='30'
value='<?php print ($row['nombre']); ?>' ></TD>
</TR>
<TR>
<TD>Web</TD>
<TD><INPUT type='text' name='web' size='30' maxlength='30'
value='<?php print ($row['web']); ?>'></TD>
</TR>
<TR>
<TD>Telef</TD>
<TD><INPUT type='text' name='telef' size='20' maxlength='20'
value='<?php print ($row['telef']); ?>'></TD>
</TR>
<TR>
<TD>Sector</TD>
<TD><INPUT type='text' name='sector' size='30' maxlength='30'
value='<?php print ($row['sector']); ?>'></TD>
</TR>
<TR>
<TD>Descrip</TD>
<TD><INPUT type='text' name='descrip' size='50' maxlength='50'
value='<?php print ($row['descrip']); ?>'></TD>
</TR>
<TR>
<TD>Karma</TD>
<TD><INPUT type='text' name='karma' size='3' maxlength='3'
value='<?php print ($row['karma']); ?>'></TD>
</TR>
</table>
<INPUT type='hidden' name='id' value='<?php
print ($row['id']); ?>'>
<INPUT type='submit' value='Aceptar'>
</FORM>
</center>
<?php
mysqli_close($link);
?>
</body>
</html>
