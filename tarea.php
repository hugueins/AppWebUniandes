<?php
//Tarea1 Semana1 Hugo Herrera 6to Software
// a. Declaración de Variables:
//- Definir al menos cinco variables de diferentes tipos de datos (integer, float, string, boolean, array).
//- Asignar valores a estas variables.
$v_int = "5";
$v_float = "8.2";
$v_strg1 = "El valor de la variable Entero es =";
$v_strg2 = "El valor de la variable Float es =";
$v_strg3 = "El producto de estas variables es ="; 
$v_strg4 = "La longitud de v_Strg1 es ";
$v_bolean_t = "Verdadero";
$v_bolean_f = "falso";

//  b. Operaciones Aritméticas:
// - Realizar al menos dos operaciones aritméticas con las variables numéricas que has creado. Muestra el resultado usando la función `echo`.
$o_prod = $v_int*$v_int;
$o_cos = $v_int/$v_int;
$o_prod_int_flt = $v_int*$v_float;
$o_cos_int_flt = $v_int/$v_float;

//c. Manipulación de Cadenas:
//  - Crea una variable de tipo cadena y realiza las siguientes acciones:
//  - Concatenación de dos cadenas.
//  - Obtén la longitud de la cadena.

//d. Uso de Condicionales:
//- Crea una estructura de control condicional que verifique el valor de una variable booleana y muestre un mensaje diferente según sea `true` o `false`.

//e. Creación de un Array:
//  - Define un arreglo con al menos cinco elementos.
//  - Muestra un elemento específico del arreglo utilizando su índice.

$array = [
    $v_strg1,
    $v_int,
    $v_float,
    $v_strg2,
    $o_cos,
    $o_prod,
  ];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset ="UTF-8">
    <title>Tarea S1</title>
</head>
<body>

<h2> **** ***** Definición de variables **** ****</h2>      
<p> <?php echo "El valor de la variable INTEGER es: $v_int";?></p>
<p> <?php echo "El valor de la variable FLOAT es: $v_float";?></p>
<p> <?php echo "El valor de la variable String 1 es: $v_strg1";?></p>
<p> <?php echo "El valor de la variable String 2 es: $v_strg2";?></p>

<h2> **** ***** Operaciones con variables **** *****</h2>    
<p> <?php echo "El producto de dos numeros enteros enteros es: $o_prod";?></p>
<p> <?php echo "El producto de un numero entero y un decimal es: $o_prod_int_flt";?></p>
<p> <?php echo "El coeficiente de dos numeros enteros enteros es: $o_cos";?></p>
<p> <?php echo "El coeficiente de un numero entero y un decimal es: $o_cos_int_flt";?></p>

<h2> **** ***** Concatenando las variables String se optiene **** ****</h2>  
<p> <?php echo $v_strg1 . $v_int . ",  ". $v_strg2 . $v_float .",  ". $v_strg3 . "  " . $o_prod;?></p>
<p> <?php echo "El valor de la variable v_strg1 es " . $v_strg1  ;?></p>
<p> <?php echo $v_strg4 . strlen ($v_strg1);?></p>

<h2> **** ***** Uso de condiciones (variable boolean) **** ****</h2>
<p> <?php if ($v_int > $v_float) echo $v_int ." Es mayor que ".$v_float;
    elseif ($v_int < $v_float) echo $v_int ." Es menor que ".$v_float;?> </p>

<h2> **** ***** El contenido del array  **** ****</h2> 
<p><?php print_r ($array);?></p>
<p><?php echo"El elemento del indice 2 del array es " . ($array [2]);?></p>

</body>
</html>

