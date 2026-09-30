<?php

// Definicion de una funcion 
/* function nomFuncion($arg1, $arg2){
  // codigo de la funcion
  // return valor o no;
}
*/


function funcionTest(){
  $var = 10;
  return $var;
}

// Como la funcion tiene un return, tengo que igualarla a una variable para recoger el valor

$var_fun = funcionTest();

echo " La variable igualada a la funcion vale: $var_fun <br>";


//Funcion sin return

function funcionTestSin(){
  $var = 25;
  echo "La variable dentro de la funcion vale $var";
}

funcionTestSin();

// Como podemos utilizar dentro de la funcion variable globales?

$var2 = 50;

function funcionConGlobal(){
  global $var2;
  echo "<br> La variable var2 de fuera de la funcion vale: $var2";
}

funcionConGlobal();

// Recursividad --> una funcion se puede llamar a si misma

function factorial($numero){
  if($numero == 1){
    return $numero;
  }else {
    return $numero * factorial($numero - 1);
  }
}


?>