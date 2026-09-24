<?php
$preu = 99.99;
$preu_decimal = number_format($preu, 2, ',', '.');
const IVA = 0.21;
$valor_IVA = $preu * IVA;
$valor_IVA_decimal = number_format($valor_IVA, 2 , ',' ,'.');
$total = $preu * (1+(IVA));
$total_decimal = number_format($total, 2, ',', '.');
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
      <p class="preu">El preu sense IVA: <?= $preu_decimal . ' ' . MONEDA?></p>
      <p class="preu">IVA (21%): <?= $valor_IVA_decimal . ' ' . MONEDA?></p>
      <p class="total">TOTAL: <?= $total_decimal . ' ' . MONEDA ?> </p>
      <p class="estoc">Unitats disponible: 5</p>
      <p class="ref">CAM-1425367</p>
    </article>
  </main>

  <?php # echo MONEDA = 'HAPAAA'?>
  <!-- Parse error: syntax error, unexpected token "=", expecting "," or ";" in C:\xampp\htdocs\M0613\classe\exercicis_php\ex06\index.php on line 38 -->
  <footer>
    <p>Footer de la tienda chupi guay S.L</p>
  </footer>
  
</body>
</html>