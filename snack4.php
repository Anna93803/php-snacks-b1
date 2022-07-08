<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
$arrayNumeri = [];

for($i = 0; $i < 15; $i++) {

    $numeriCasuali = rand(0,50);
    if(!in_array($numeriCasuali, $arrayNumeri)) {

        $arrayNumeri[] = $numeriCasuali;
    }
}
var_dump($arrayNumeri);
?>