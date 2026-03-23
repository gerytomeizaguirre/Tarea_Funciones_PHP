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