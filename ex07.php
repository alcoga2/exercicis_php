<?php

$nota = 7.5;

if($nota >= 9){
  $qualif ='Exel·lent';
}elseif($nota >= 7){
  $qualif ='Notable';
}elseif($nota >= 5){
  $qualif ='Suficient';
}else{
  $qualif ='Insuficient';
}

?>
<?php
$estoc = 0;
?>

<?php if ($estoc > 0){ ?>
  <p>En estoc </p>
<?php } else { ?>
  <p>Esgotat</p>
<?php } ?>

<?php if($estoc > 0): ?>
  <p>En estoc </p>
<?php else: ?>
  <p>Esgotat</p>
  <?php endif; ?>

<?php
$zona = 'local';
switch ($zona){
  case 'local':
    $enviament = 0;
    break;
  case 'penisnsula':
    $enviament = 4.95;
    break;
  default:
  $enviament = 9.95;
}


$enviament = match ($zona){
    'loocal'  => 0,
    'peninsula' => 4.95,
    default => 9.95,

};

?>

<?php

// for
for($i = 1; $i <= 10; $i++){
  echo $i;
}

//while
$saldo = 4;
$objectiu = 8;
$anys = 4;
while ($saldo < $objectiu){
  $saldo *= 1.03;
  $anys++;
}

//do while
do{
  $n = rand(1, 6);
}while ($n !== 6);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taula</title>
</head>
<body>
  <table>
  <?php for ($i = 0; $i < 10; $i++): ?>
    <tr>
      <td><?= $i ?> x 7 </td>
      <td><?= $i * 7 ?></td>
    </tr>
  <?php endfor; ?>
  </table>
</body>
</html>

<?php
$colors = ['vermell', 'verd', 'blau'];

echo $colors[0]; //vermell
echo count ($colors); //3

$colors[] = 'groc'; //afegeix al final

print_r($colors);

?>

<?php

$producte = [
    'nom' => 'Teclat mecanic',
    'preu' => 79.90,
    'estoc' => 4,
];

echo $producte['nom'];
$producte['preu'] = 90.4;

?>



<?php

foreach ($colors as $color){
  echo "<li>$color</li>";
}

foreach ($producte as $clau => $valor){
  echo "<dt>$clau</dt>";
  echo "<dd>$valor</dd>";
}


$productes = [
    ['nom' => 'Teclat', 'preu' => 79.9],
    ['nom' => 'Ratoli', 'preu' => 25.9],
    ['nom' => 'Monitor', 'preu' => 160],
];
?>

<?php foreach ($productes as $p): ?>
  <tr>
    <td><?= $p['nom'] ?></td>
    <td><?= $p['preu'] ?> EUR</td>
  </tr>
<?php endforeach; ?>



<?php 


/* FUNCIONS 

count($a) --> Quants elemenyts te
in_array($x, $a, true) --> Si un valor hi és (el true fa la comparació estricta)
array:key_exists('k',$a)  --> Si una clau existeix
sort / rsort / ksort   --> Ordena per valor o per clau
array_sum / max / min  --> Suma, maxim, minim
array_column($a, 'preu')  --> Treu una columna d'un array d'arrays
implode(', ', $a) / explode --> Array de text i text a array

*/






