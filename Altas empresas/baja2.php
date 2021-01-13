<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <title></title>
 <meta name="GENERATOR" content="Quanta Plus">
 <meta http-equiv="Content-Type" content="text/html; charset=iso8859-1">
</head>
<body>
<?php
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
foreach ($_POST["borrar"] as $indice => $valor)
{
    if ($valor == "on")
    {
        $linea1 = "DELETE FROM empresas ";
        $linea2 = " WHERE id='$indice' ";
        $consulta = $linea1 . $linea2;
        //echo "$consulta";
        if (!$result = mysqli_query($link, $consulta))
        {
            echo "<a href=index.html>Error en el borrardo</a>";
            exit;
        }
    }
}
echo "<br>Borrado correcto";
echo "<br><br><a href='baja.php'>Otra baja</a>";
echo "<br><br><a href='index.html'>Inicio</a>";
mysqli_close($link);
?>
</body>
</html>
