<?php
$arreglo = [];

for ($i=0; $i < 20; $i++) { 
    $arreglo [$i] =rand(-10,20); 
}

foreach ($arreglo as $datos) {
    echo $datos . ', ';
}
?>