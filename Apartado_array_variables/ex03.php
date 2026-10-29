<?php
$nom= 'Popeye';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tres formas</title>
</head>
<body>
  <h1>Tres formas y el mismo resultado</h1>

  <!--Froma 1: esvribe toda la etiqueta <p>-->
    <?php echo "<p>Hola, $nom</p>"; ?>

  <!--Froma 2: HTML esta fuera, php solo pone el valor -->
    <p>Hola <?= $nom ?></p>

  <!--Froma 3: El de toa la life -->
    <p>Hola Popeye</p>

</body>
</html>