<?php
$name = "Yenner";
$isDev = true;
$age = 21;
$output = "Este es un ejemplo de interpolación de cadenas $age,$name"; // Para interpolar cadenas en php usamos comillas dobles, con las comillas simples no sirve
 

// Así se define una constante global
define('LOGO_URL', 'data:image/png;base64,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');

// Así se define una constante local
const SCHOOL = "SENA";

// Función que me permite ver el valor y el tipo de dato
var_dump($name);
var_dump($isDev);
var_dump($age);

?>
<h1>
    <img src="<?$LOGO_URL?>" alt="">
   <?= $age ?>
</h1>

<h1> Operador ternario </h1>
<?php if($isDev) : ?>
    <h1>Eres programador felicidades</h1>
<?php else : ?>
    <h2>No eres programador</h2>
<?php endif?>


<?php 
// Operador match

$outputAge = match (true) {
    $age < 2 => "Eres un bebé $name",
    $age < 7 => "Eres un niños $name",
    $age === 18 => "Eres un adolescente $name",
    default => "Hueles más a madera que a fruta"
};

//Arrays

$bestLanguages = ["Php","JavaScrip","Python"];
$bestLanguages[] = "C#";
?>

<ul>
    <?php foreach($bestLanguages as $languages) :?>
        <li><?= $languages?></li>
    <?php endforeach; ?>
</ul>

<h2>
    <?= $outputAge ?>
</h2>