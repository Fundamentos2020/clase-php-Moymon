<?php
//Declaracion de variables
$a = "Hola mundo";
$b = 3;
$c = 2.5;
///Concatenar con . , + para valores numericos
echo $a . " " . $b . " " . $c;

echo "<br>";

$array_1 = array();
$array_2 = array();

///Primer tipo es el comun que utilizamos
//add
$array_1[] = 1;
$array_1[] = 2;
$array_1[] = 3;

echo "<br>";

///var_dump() para objetos y arreglos
///mostrar
var_dump($array_1);

///Segundo tipo asociativos
//add

$array_2['Valor1'] = 1;
$array_2['Valor2'] = 2;
$array_2['Valor3'] = 3;

echo "<br>";

var_dump($array_2);

echo "<br>";

///imprime el valor
echo $array_2['Valor1'];

echo "<br>";

$alumno = array();
$array_2['ClaveU'] = "260941";
$array_2['Nombre'] = "Moises";
$array_2['Apellido'] = "Gonzalez";
//json
$json = '{"ClaveU":"260941","Nombre":"Moises"}';
echo "<br>";
$alumno_aux = json_decode($json);
var_dump($alumno_aux);

echo "<br>";

echo $alumno_aux->ClaveU;

echo "<br>";

    function miFuncion()
    {
      Global $a,$b;
      $a = "CambiarTexto";   
    }

miFuncion();
echo $a;

echo "<br>";
//Clases
    class miClase
    {
        public $x;
        public $y;
    }
 $cls = new miClase(); 

 $cls->x = "valor x";

 var_dump($cls);
?>
