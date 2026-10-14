<?php

/** 
 * PAS2 recollir les dades corectament

*/
// echo "<p>Hola, ".$_POST['nom']. "</p>";

$nom    = trim($_POST['nom'] ?? '');
$correu = trim($_POST['correu'] ?? '');
$dia    = trim($_POST['dia'] ?? 'sense triar');

echo "<p>Hola, ".$nom. "</p>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultat PAS 2</title>
</head>
<body>
  <h1>Dades recollids:</h1>
  <ul>
    <li><?= $nom ?></li>
    <li><?= $correu ?></li>
    <li><?= $dia ?></li>

    <p>El nom té <?= strlen($nom) ?> caracters.</p>


  </ul>
  
</body>
</html>