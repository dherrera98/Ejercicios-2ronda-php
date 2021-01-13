<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <title>alta2</title>
 <meta name="GENERATOR" content="Quanta Plus">
 <meta http-equiv="Content-Type" content="text/html; charset=iso8859-1">
</head>
<body>
<?php
$linea1 = "INSERT INTO empresas (nombre, web, telef, sector,
descrip, karma) ";
$linea2 = " VALUES ('$_POST[nombre]', '$_POST[web]', '$_POST[telef]', '$_POST[sector]',
'$_POST[descrip]', '$_POST[karma]') ";
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
echo "<br>Alta correcta";
echo "<br><br><a href='alta.html'>Otra alta</a>";
echo "<br><br><a href='alta.html'>Inicio</a>";
mysqli_close($link);
?>
</body>
</html>
