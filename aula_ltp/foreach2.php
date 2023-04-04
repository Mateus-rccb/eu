<!DOCTYPE hmtl>
<html>
  <head>
    <meta charset 
  </head>
  <body>
<?php

$materia = array("Marcio"=>"PHP", "Glauco"=>"Java", "Schaefer"=>"Banco de Dados");

echo '<p><strong>Primeiro foreach</strong></p>';
echo '<table border="1">';
echo '<tr><th>Professor</th><th>Disciplina</th></tr>';
foreach($materia as $i=>$m) {
  echo '<tr><td>'.$i . '</td><td>' . $m . '</td></tr>';
}
echo '</table>';

echo '<p><strong>Segundo foreach</strong></p>';
echo '<table border="1">';

$linha1 = '<tr><th>Professor</th>';
$linha2 = '<tr><th>Disciplina</th>';

foreach($materia as $i=>$m) {
  $linha1 = $linha1 . '<td>' . $i . '</td>';
  $linha2 = $linha2 . '<td>' . $m . '</td>';
}

$linha1 = $linha1 . '</tr>';
$linha2 = $linha2 . '</tr>';

echo $linha1;
echo $linha2;

echo '</table>';

?>

  </body>
</html>
