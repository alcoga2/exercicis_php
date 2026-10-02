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

  // Cuenta las palabras de un string. Según el segundo parámetro:
  // 0 = devuelve el número de palabras (por defecto)
  // 1 = devuelve un array con las palabras
  // 2 = devuelve un array asociativo (posición => palabra)
  $frase = "Hola mundo, esto es PHP";

  echo str_word_count($frase);          // 5
  print_r(str_word_count($frase, 1));   // ["Hola", "mundo", "esto", "es", "PHP"]

//Exercici 2: busca levanshtein() y pon un ejemplo

  // Calcula la distancia de Levenshtein entre dos strings: el número mínimo
  // de operaciones (insertar, reemplazar o borrar un carácter) necesarias
  // para convertir uno en otro. 0 significa que son idénticos.
  echo levenshtein("casa", "cosa");     // 1 (se cambia la 'a' por la 'o')
  echo levenshtein("gato", "gatito");   // 2 (se insertan 'i' y 't')
  

//Exercici 3: busca que es el operador ternario y pon un ejemplo 
  
  // Es una forma abreviada de un if/else en una sola línea:
  // condicion ? valor_si_verdadero : valor_si_falso
  $edad = 20;
  $mensaje = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";
  echo $mensaje;                        // Mayor de edad

  // Versión corta (Elvis ?:): devuelve el primer valor si es "truthy"
  $nombre = "";
  echo $nombre ?: "Anónimo";            // Anónimo


//Exercici 4: Explicar que hace la funcion:
function funcioMultipleReturns($v1,$v2,$v3){
  $v1 = "variable1";
  $v2 = "variable2";
  $v3 = "variable3";

  return array($v1,$v2,$v3)
}

// La funcion recibe tres valores por parametros pero los reescribe inmediatamente por lo tanto pierden sui valor inciail.
// Al final de la funcion como  no puede devolver tres valores individuales con un return lo que devuelve es una array que contiene los 3


/*
  Exercici 5: Crea una funcion comprova_email(...)
  que reciba una cadena de caracteres como parametro que contienen un email y hace las siguientes comprovaciones:
  - Convertir a minuscula
  - Eliminar todos los espacios
  - comprovar si tiene el caracter @
  - contar el numero de caracteres


*/

<?php

/*
  Exercici 5: comprova_email()
  - Convierte a minúscula
  - Elimina todos los espacios
  - Comprueba si tiene el carácter @
  - Cuenta el número de caracteres
*/
function comprova_email($email) {
    // 1. Convertir a minúscula
    $email = strtolower($email);

    // 2. Eliminar todos los espacios (no solo los de los extremos)
    $email = str_replace(" ", "", $email);

    // 3. Comprobar si tiene el carácter @
    $tieneArroba = (strpos($email, "@") !== false);

    // 4. Contar el número de caracteres
    $numCaracteres = strlen($email);

    // Devolvemos todo en un array (múltiples returns, como en el ejercicio 4)
    return array($email, $tieneArroba, $numCaracteres);
}

// Ejemplo de uso
list($emailLimpio, $tieneArroba, $numCaracteres) = comprova_email("  Usuari O@Gmail.COM ");

echo "Email limpio: $emailLimpio<br>";                              // usuario@gmail.com
echo "Tiene @: " . ($tieneArroba ? "Sí" : "No") . "<br>";           // Sí
echo "Número de caracteres: $numCaracteres<br>";                     // 17

?>