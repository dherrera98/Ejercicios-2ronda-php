<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <title>consulta5</title>
 <meta name="GENERATOR" content="Quanta Plus">
 <meta http-equiv="Content-Type" content="text/html; charset=iso8859-1">
</head>
<body>
<FORM action='consulta5-2.php' method='POST'>
 Seleccione sector
<?php
include_once("./funciones.php");
generar_select("sector");
?>
<INPUT type='submit' value='Generar informe'>
</FORM>
</body>
</html>