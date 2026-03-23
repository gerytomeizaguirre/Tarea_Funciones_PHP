<?php
//isset();
//isset: Determina si una variable está declarada y es distinta de null.

$nombre = "Gery";

if (isset($nombre)) {
    echo "Nombre Ingresado\n"; // Esto se imprime
}

//empty();
//Es una funcion que se utilizar para chequear si una variable contiene algun dato.
$apellido = "";

if (empty($apellido)) {
    echo "Apellido Vacio\n"; 
}

//gettype()
//Devuelve el tipo de dato de la variable

echo gettype($nombre) . "\n";

//is_a
//is_array() / is_int() / is_string()
//Verifica si el objeto es de un cierto tipo o subtipo

if (is_string($nombre)) {
    echo "El nombre es válido. \n";
}

//var_dump()
//muestra información estructurada sobre una variable, incluyendo su tipo y valor. 
//Los arrays y objetos son explorados recursivamente, con indentaciones, para resaltar su estructura.

var_dump($nombre)."\n";

//strlen()
//Calcula el tamaño de un string incluyendo espacios, puntos y símbolos.

echo strlen($nombre) . "\n";

//str_replace
//Busca y reemplaza, devuelve una string o un array dependiendo de los datos cambiados

$texto = "Me gusta el cafe por la mañana.";
$nuevo_texto = str_replace("cafe", "te", $texto);

echo $nuevo_texto;
echo "\n";

//strtolower() / strtoupper()
//Cambia a minusculas o mayusculas respectivamente


echo strtoupper($nombre) ."\n";


//trim
//Elimina los espacios en un string

$texto = "     Me gusta el agua     ";
echo trim($texto) ."\n";

//substr
//Extrae una parte de un string

$texto = "Me gusta el agua";
echo substr($texto, 0,2) ."\n";

//strpos
//Busca la posición en un string 
//La estructura es: strpos(pajar, aguja, inicio)
//pajar donde se quiere buscar, aguja lo que se quiere buscar e inicio es opcional

$mensaje = "Bienvenido al curso de PHP";
$posicion = strpos($mensaje, "PHP");

echo $posicion."\n";

//explode
//dividir una cadena de texto en varias partes cada vez que encuentra un separador específico
//guardar esas partes dentro de un array

$frutas = "manzana,pera,plátano,uva";
$lista = explode(",", $frutas);

echo $lista[0]."\n";

//implode
//Es lo contrario al explode, convierte un array en una cadena de texto utilizando un separador específico.

$lista_frutas = implode(", ", $lista);
echo $lista_frutas . "\n";

//count
//Cuenta el número de elementos en un array

echo count($lista) . "\n";

//array_push() / array_pop()
//array_push() agrega uno o más elementos al final de un array
//array_pop() elimina el último elemento de un array

array_push($lista, "naranja");

echo count($lista) . "\n";

array_pop($lista);

echo count($lista) . "\n";

//array_merge()
//Se usa para combinar dos o más arrays en uno solo

$frutas = ["Manzana", "Pera"];
$verduras = ["Lechuga", "Tomate"];

$comida = array_merge($frutas, $verduras);

echo count($comida) . "\n";

//array_keys()
//Devuelve todas las etiquetas de un array

$usuario = [
    "id" => 52,
    "nombre" => "Carlos",
    "email" => "carlos@example.com",
    "rol" => "admin"
];

$campos = array_keys($usuario);

print_r($campos);

//array_values()
//Devuelve todos los valores de un array

$valores = array_values($usuario);

print_r($valores);

//in_array
//Indica si un valor pertenece a un array

if (in_array("Pera", $comida)) {
    echo "Pera esta en la lista \n";
}

