<?php
    echo "<h2>Arrays</h2>";

    echo "<h4>Arrays with strings</h4>";
    $array_strings = array("Watermelon", "Melon", "Pineapple", "Orange");
    print_r($array_strings);

    echo "<h4>Arrays with numbers</h4>";
    $array_numbers = array(10, 5.5, 20, 25.5);
    print_r($array_numbers);

    echo "<h4>Arrays with numbers</h4>";
    echo count($array_numbers) . "<br>";

    echo "<h4>Last item array</h4>";
    print_r(end($array_strings));

    echo "<h4>Add new element item array</h4>";
    print_r(array_push($array_strings, "banana"));