<?php

/*
Crear array asociativo:
-nom
-curs
-edat
-nota_mitjana


10 alumnos

Mostrar en table html
*/

$alumnes = [
    ['nom' => 'A', 'curs' => 3, 'edat' => 9, 'nota_mitjana' => 8], 
    ['nom' => 'B', 'curs' => 3, 'edat' => 9, 'nota_mitjana' => 6],
    ['nom' => 'C', 'curs' => 3, 'edat' => 9, 'nota_mitjana' => 9],
    ['nom' => 'D', 'curs' => 3, 'edat' => 9, 'nota_mitjana' => 5],
    ['nom' => 'E', 'curs' => 3, 'edat' => 9, 'nota_mitjana' => 6],
    ['nom' => 'F', 'curs' => 3, 'edat' => 9, 'nota_mitjana' => 7],
    ['nom' => 'G', 'curs' => 3, 'edat' => 9, 'nota_mitjana' => 4],
    ['nom' => 'H', 'curs' => 3, 'edat' => 9, 'nota_mitjana' => 9],
    ['nom' => 'I', 'curs' => 3, 'edat' => 9, 'nota_mitjana' => 8],
    ['nom' => 'J', 'curs' => 3, 'edat' => 9, 'nota_mitjana' => 5],
];

// count — Cuenta todos los elementos de un array o en un objeto Countable
echo count($alumnes);

// in_array — Indica si un valor pertenece a un array






?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table>
     <tr>
        <th>Nom:</th>
        <th>Curs</th>
        <th>Edat</th>
        <th>Nota mitjana</th>
      </tr>
    <?php foreach ($alumnes as $a): ?>
      <tr>
        <td><?=$a['nom']?></td>
        <td><?=$a['curs']?></td>
        <td><?=$a['edat']?></td>
        <td><?=$a['nota_mitjana']?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>



