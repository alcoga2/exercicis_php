<?php

// Funciones preestablecidas de php
// isset() --> permite saber si una variable existe en nuestro programa

// unset() --> para liberar espacio en memoria de una variable


$var = "10";

if(isset($var)){
  echo "la variable $var existe";
}


unset($var);

if(isset($var)){
  echo "la variable $var existe";
}else{
  echo "La variable $var no existe";
}

// gettype() --> nos retorna el tipo de variable que pasamos por parametro

// settype() --> asignamos un tipo de dato a la variable que pasamos por parametro

// empty() --> funcion que mira si una variable esta vacia, no existe o su valor es 0

// is_integer(var), is_double(var), is_array(var), is_string(var) --> para saber si una variable es integer, double, string, array, etc

// Ex1: for para la tabla de multiplicar del 5
// var: existe?

// Ex2: mostrar los numeros pares del 1 al 1000

// Ex3: dibuja una tabla html donde salgan las tablas de multiplkicar del 1 al 10


function ex2(){
  echo "El numeros pars son: ";
  for($i = 0; $i <= 1000; $i++){
    if($i % 2 == 0){
      echo "$i, ";
    }
  }

}


function ex3(){
  echo "<table border=\"2\">";
  for($i = 0; $i <= 10; $i++){
    echo "<tr>";
    for($j = 0; $j <= 10; $j++){
      $res = $i * $j;
      echo "<td> $i x $j = $res</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>EX1</h2>
  <div>
    <?php for ($i = 0; $i < 10; $i++): ?>
    <tr>
      <td><?= $i ?> x 5 =</td>
      <td><?= $i * 5 ?></td>
      <br>
    </tr>
    <?php endfor; ?>
    <?php echo isset($i) ?>
    <?= $i ?>

  </div>
  
  <h2>EX2</h2>
  <div>
      <?php ex2()?>
  </div>

  <h2>EX3</h2>
  <div>
    <?php ex3() ?>
  </div>
</body>
</html>