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

echo "<pre>";
print_r($_SERVER);
echo "</pre>";  


?>