<?php

// nom = 'Aina'; falta el $
$nom = 'Aina';

// assignatura = 'Desenvolupament web' falta el punto y coma
$assignatura = 'Desenvolupament web';

$nota1 = 7;
$nota2 = 9;
$mitjana = ($nota1 + $nota2) / 2; // faltaba los parentesis para hacer bien la operacion

echo '<h1>Bulleti de notes</h1>';
// echo '<p>Aluma: $nom</p>';  // son dos cometes perque agafi la variable com el valor de la variable
echo "<p>Aluma: $nom</p>";
//echo '<p>Assignatura: ' + $assignatura + '</p>'; Es concatena amb el çs punts
echo '<p>Assignatura: ' . $assignatura . '</p>';
// echo "<p>Mitjana: $mitjana</p>; falta cerrar las comillas
echo "<p>Mitjana: $mitjana</p>";

echo '<p>Generat el ' . date('d/m/Y') . '</p>';