<?php

/**
 * PAS 3 - Una sola pagina
 * Fins ara tenim dos fitxers , el formulari y el resultat
 * Mirar com es fa la petició i aixi fara una cosa o altre
 * La primera visita és amb el GET i quan es prem el botò d'enviar és amb POST
*/

$nom = '';
$correu = '';
$dia = '';

// var de control
$enviat = false ;
// Array predefinida $_SERVER nos da informacion del servidor
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";  

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $nom    = trim($_POST['nom'] ?? '');
  $correu = trim($_POST['correu'] ?? '');
  $dia    = trim($_POST['dia'] ?? 'sense triar');
  $enviat = true;

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscripció festival</title>
</head>
<body>
  <h1>Inscripció al festival</h1>

  <?php if($enviat): ?>
    <p>Inscripció rebuda: <?= htmlspecialchars($nom); ?> (<?= htmlspecialchars($correu) ?>), dia <?= htmlspecialchars($nom); ?>.</p>
  <?php endif;?>

  <form action="pas3-resultat.php" method="post">
    <!-- no hace falta el action -->

    <label for="name">Nom</label> 
    <input id="nom"  name="nom">
    <br>
    <br>
    <label for="correu">Correu</label>
    <input id="correu" name="correu" type="email">
    <br>
    <br>
    <label for="correu">Repita correu</label>
    <input id="correu" name="correu" type="email">
    <br>
    <br>
    <label for="dia">Dia</label>
    <select name="dia" id="dia">
      <option value="divendres">divendres</option>
      <option value="disabte">dissabte</option>
    </select>
    <br>
    <br>
    <label for="telefon">Telefon</label>
    <input id="telefon" name="telefon" type="number">
    <br>
    <br>
    <label for="calle">Calle</label>
    <input id="calle" name="calle" type="text">
    <br>
    <br>
    <label for="portal">Numero de portal</label>
    <input id="partal" name="portal" type="number">
    <br>
    <br>
    <button> Inscriue'm</button>
</body>
</html>