<?php
    $array = array("Banana", "Apple", "Piña", "Watermelon");
    $indice = 0;

    echo "<h2>For simple<h2>";
    //Bucle for simple
    for ($i=0; $i < count($array); $i++) {
        echo "$array[$i]<br>";
    }

    echo "<h2>foreach<h2>";
    //Bucle foreach
    foreach ($array as $key => $value) {
        echo "$value<br>";
    }

    echo "<h2>while<h2>";
    //Bucle while
    while ($indice < count($array)) {
        echo "$array[$indice]<br>";
        $indice++;
    }

    echo "<h2>do while<h2>";
    $indice = 0;
    //Bucle do while
    do {
        echo "$array[$indice]<br>";
        $indice++;
    } while ($indice < count($array));