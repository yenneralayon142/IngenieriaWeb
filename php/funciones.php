<?php

function saludar(){
    $ar = ["Hola","Chao"];
    array_push($ar,"buenass");
    print_r($ar);
    array_pop($ar);
    print_r($ar);
    unset($ar[0]);
    print_r($ar);
}
saludar();

/* Variables */
$int = 0;
$float = 2.99;
$bolean = true;
$string = "holaaa";

// Suma arrays con bucle for
function sum($arr){
    $result = 0;
    for($i= 0; $i < count($arr);$i++){
        $result += $arr[$i];
    }
    return $result;
}
print_r(sum([2,4,2]));

// Sumar Arrays de forma más dinamica
function sum2($arr2){
    return array_sum($arr2);
}
print_r(sum2([3,5]));

// Concatenar Strings
function concatenar($word){
    return $word . "Holliiii";
}
print_r(concatenar("Veooo"));

//Finobacci

function finobacci(){
    $a = 0;
    $b = 1;
    $c = 0;
    $result = [$a,$b];
    for($i = 2; $i < 11; $i++){
        $c = $a + $b;
        array_push($result,$c);
        $a = $b;
        $b = $c;
    }
    return $result;
}
print_r(finobacci());

// Par o impar

function par($a){
    if($a % 2 === 0){
        return "El número es par";
    }
    else{
         return "El número es impar";
    }
}
print_r(par(3));

// Propagación
function prop(){
    $pets = ["perros" , "gatos", "ratones"];
    $pets2 = [...$pets, "palomas"];
    print_r($pets2);
}
prop();

function propagation(){
    $sports = ["soccer","basketball","volleiball"];
    $sports2 = [...$sports,"guns"];
    print_r($sports2);
}
propagation()


?>

