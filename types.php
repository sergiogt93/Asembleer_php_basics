<?php
    echo "<h2>Types</h2>";

    echo "<h4>Boolean</h4>";
    $boolean = true;
    echo $boolean;

    echo "<h4>Integer</h4>";
    $number = 10;
    echo $number;

    echo "<h4>Float</h4>";
    $numberFloat = 10.2;
    echo $numberFloat;

    echo "<h4>String</h4>";
    $string = "Cadena";
    echo $string;

    echo "<h4>Array</h4>";
    $array = array("Watermelon", "Melon", "Apple", "Orange");
    print_r($array);

    echo "<h4>Object</h4>";
    $array = array(
        "marca" => "lg",
        "model" => "tesla",
        "price" => 14
    );
    print_r($array);

    echo "<h4>Null</h4>";
    $string = null;
    echo $string;
