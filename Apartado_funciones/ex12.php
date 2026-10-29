<?php
declare(strict_type=1); //Primera linea en el fitxero, indica que el archivo es restrictivo

// Teoria funciones
// Declarar
function peu(): void 
{
  echo '<footer>....</footer>';
}

//Llamar
peu();

function targeta (string $nom, float $preu, int $estoc):void 
{
  echo "<h3> $nom </h3> <p>$preu EUR · $estoc unitats </p>";

}

targeta('Teclat', 79.90, 4);


function preuAmbIva(
float $base,
float $iva = 0.21   // Asigna un valor por defect, si este parametro lo pasas tu se sobrepondra al 0.21
): float {
  return round($base * (1+$iva),2);
}

preuAmbIva(100);
preuAmbIva(100,0.10);


$botiga = 'BitBazar';

function mostra(): string{
  return 'Som a ' . $botiga; // NO la veu

}

// Warning: Undefined variable botiga, hay que pasarsela por parametros



function compta(): int {
  $n = 0;
  $n++;
  return $n;
}
// 1,1,1

function compta(): int {
  static $n = 0; // El valor se mantiene globalmente
  $n++;
  return $n
}
// 1,2,3


function disponibles(array $p):array
{
  $res = [];
  foreach($p as $item){
    if ($item['estoc'] > 0){
      $res[] = $item;
    }
  }
  return $res;
}