<?php
$preu = 99.99;
const IVA = 0.21;
$total = $preu * (1+(IVA));
$producte = 'Camiseta chupi chupi-guay';

const BOTIGA = 'Tienda online guay';
const MONEDA = 'EUR';
const DESCOMPTE_SOCI = null;  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda online Guay</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1> <?= BOTIGA ?></h1>
    <p>Esto es una tienda online guay</p>
  </header>

  <main>
    <article class="producte">
      <h2>Cami Guay</h2>
      <p class="descripció"><?= $producte ?></p>
      <p class="preu">El preu sense IVA: <?= $preu . ' ' . MONEDA?></p>
      <p class="preu">IVA (21%): <?= round($preu * IVA, 3) ?></p>
      <p class="total">TOTAL: <?= $total . ' ' . MONEDA ?> </p>
      <p class="estoc">Unitats disponible: 5</p>
      <p class="ref">CAM-1425367</p>
    </article>
  </main>

  <footer>
    <p>Footer de la tienda chupi guay S.L</p>
  </footer>
  
</body>
</html>