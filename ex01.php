<?php
echo 'Hola';
echo 'Hola', ' ', 'mon';
echo '<p>Text</p>';

print 'Hola'; //Retorna 1
var_dump($x); //per depurar
print_r($dades); //llegible

$nom = 'Ania';
$edat = 19;
$actiu = true;

$nom = 'Bernat'; // es pot canviar
$total = $edat + 1;

echo $nom;

$x = 5;
$x = 'cinc';

$a = '10' + 5;  //15 (int)
$b = '10' . 5; //'105' (string)

var_dump($a, $b);

$nom = 'Ania';
echo 'Hola $nom'; // HOla $nom
echo '<br>';
echo "HOla $nom"; // Hola Ania
echo '<br>';



$punts = 8;

echo 'Hola ' . $nom . ', tens ' . $punts . ' punts';  
echo '<br>';
echo " Hola $nom, tens $punts punts";
echo '<br>';
echo "Hola {$nom}, tens {$punts} punts";

echo '<br>';
echo '<br>';

define('IVA', 0.21);
const BOTIGA = 'CA la WEB';

echo BOTIGA;  // sense el $
$total = $base * (1 + IVA);

// IVA = 0.10;  -> Error fatal



$missatge = "Hola";  // ambit global
function saluda() {
  echo $missatge; // no la veu
  $intern = 'Adeu';  // ambit local
}

saluda();
echo $intern;   // tampoco la veu


/* 

  declare(strict_types=1);

  ini_set('display_errors', '1');

  error_reporting(E_ALL);

  setlocale() · data_default_timezone_set();


*/
