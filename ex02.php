<?php
//Declaramos la constante IVA (no cambia de valor)
const IVA = 0.21;

$producte = 'Teclat';
$base = 79.90;
$estoc = 4;
// funcion prdefinida 
$total = round($base * (1 + IVA), 2);
?>

<h2><?php echo $producte ?></h2>

<p>Preu amb IVA: <?= $total; ?> EUR</p>

<p>Disponibilitat: <?= $estoc ?></p>

<?php
$nom = 'Alvaro';
$cognom = 'Contreras';
$direccio = 'NO te la voy ha decir';
?>


<h2>Dades personals</h2>
<p>Nom complet: <?= $nom . ' ' . $cognom?></p>
<p>Direcció: <strong><?php echo $direccio ?></strong></p>