<?php
$ins = $pdo->query("SELECT * FROM employe");

  echo '<table border= 2px> <tr  style="background:#0096D7; color:white; ">';

  for($i=0; $i < $ins->columnCount(); $i++)



  {
    $Nom_colonne = $ins->getColumnMeta($i);
    echo '<th>' .$Nom_colonne['name'].'</th>';
  }

  echo "</tr>";


  while($ligne = $ins->fetch(PDO::FETCH_ASSOC))

  {
    echo '<tr>';
    foreach($ligne as $indice => $information)
    {
      echo '<td>' .$information . '</td>';
    }
    $action = 'Action';
    echo '<td>' . $action . '</td>';
    echo '<td>' . $action . '</td>';
    echo '</tr>'; 
     }
echo '</table>';
?>