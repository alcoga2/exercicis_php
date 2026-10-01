<?php

//Funciones con cadenas de texto (strings)

$cadena ="Hola";

$cadena[0] = "C";

echo "Ahora cadena es: $cadena <br>";


// strlen  --> medir la lognitud de la cadena

$cadena = "Aquesta cadena te moltes lletres <br>";  // agafa els espais i en aquest cas el br també

$num_caracters = strlen($cadena);

echo "Num de caracters: $num_caracters <br>";



// strpos --> Retorna la casella on troba la subcadena dins de la cadena pasada
//Sempre retorna la primera ocurrencia


$email = "hola@jviladoms.cat";
echo "Posició @: ".strpos($email, "@") . "<br>";


// stecmp --> string compare, compara dos cadenas si retorna 0 es igual
// strcmp($cad1,$cad2);
// si retorna <0 la primera cadena es mas pequeña
// si retorna >0 la primera cadena es mes gran
// 0 es que son identiques

$cad1 = "Ale";
$cad2 = "Pepe";

echo "Utilizamos strcmp: ".strcmp($cad1,$cad2) . "<br>";



//substr: retorna una subcadena de c aracters d'una cadena a partir de la poscicio
// especificada fins al final o del tamany especificat

//La cadena original no pateix cap modificacio


$cadena = "PHP és un lenguage facul";
echo "El substr de 0 a 3 és: " . substr($cadena,0,3)."<br>"; // Saldra PHP i l'espai

echo "El substr de 21 es: " . substr($cadena,21) . "<br>";


// trim: eliminar los espacios en blanco y saltos de linea que hya al principio y al final de la cadena

echo "Ejemplo de trim; " .trim("           Hola bb            ")."<br>";

// ltrim: eliminar los espacios en blanco y saltos de linea que hya al principio de la cadena
echo "Ejemplo de ltrim; " .ltrim("           Hola bb            ")."hola";


//str_replace($anitga,$nova,$cadena): substitueix la cadena $antiga per la cadena $nova dins de cadena

$cadena="Mi puta madre";
$antiga="puta";
$nova="maravillosa";

echo "Ejemplo str_replace: " .str_replace($antiga,$nova,$cadena)."<br>";

// ereg_replace / eregi_replace()

//strtolower($cadena)

//strtoupper($cadena)

//explode: permet dividir una cadena segons un caracter o patró 


//Exercici 1: buscar en php.net la funció: str_word_count() y pon un ejemplo


//Exercici 2: busca levanshtein() y pon un ejemplo


//Exercici 3: busca que es el operador ternario y pon un ejemplo 


//Exercici 4: Explicar que hace la funcion:
function funcioMultipleReturns($v1,$v2,$v3){
  $v1 = "variable1";
  $v2 = "variable2";
  $v3 = "variable3";

  return array($v1,$v2,$v3)
}

/*
  Exercici 5: Crea una funcion comprova_email(...)
  que reciba una cadena de caracteres como parametro que contienen un email y hace las siguientes comprovaciones:


*/

?>