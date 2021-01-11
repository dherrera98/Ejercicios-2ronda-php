<?php
function conectar($bdd)
{
  if ( ! $link=mysqli_connect('localhost','root',''))
    {
      echo "<a href=index.html>Error al conectar</a>";
      exit ;
    }
  if ( ! mysqli_select_db($link, $bdd))
    {
      echo "<a href=index.html>Error al seleccionar BDD</a>";
      exit;
    }
  return $link;
}

function generar_select($campo)
{
  $link = conectar("buscador");
  $linea1="select * from empresas group by $campo";
  $sql = $linea1;
  $result = mysqli_query($link, $sql);
  if (!$result)
    {
      echo "F generar_select: Error al acceder a la base de datos" ;
      echo "<a href='./index.html'>Continuar</a><BR>\n";
      exit;
    }
  else
  {
    echo "<select name=$campo>";
    for($i=0; $i < mysqli_num_rows($result); $i++)
    {
      $row = mysqli_fetch_assoc($result);

      $v=$row[$campo];
      echo "<option value='$v'>";
      echo "$v";
      echo "</option>";
      echo "\n";
    }
    echo "</select>";
    echo "<br>";
  }
}
?>