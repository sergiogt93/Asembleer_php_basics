<?php
    $number1 = 1;
    $number2 = 2;
    $compareResult = "";

    echo "<h2>Arithmetic Operators</h2>";
    echo "<h3>Suma</h3>";
    echo "$number1 + $number2 = " . ($number1+$number2);

    echo "<h3>Resta</h3>";
    echo "$number1 + $number2 = " . ($number1-$number2);

    echo "<h3>Multiplicacion</h3>";
    echo "$number1 + $number2 = " . ($number1*$number2);

    echo "<h3>Division</h3>";
    echo "$number1 + $number2 = " . ($number1/$number2);

    echo "<h2>Comparison Operators</h2>";
    echo "<h3>Equal</h3>";
    $compareResult = $number1==$number2 ? "Si" : "No";
    echo "$number1 == $number2 = $compareResult";

    echo "<h3>Not equal</h3>";
    $compareResult = $number1!=$number2 ? "Si" : "No";
    echo "$number1 != $number2 = $compareResult";

    echo "<h3>less than</h3>";
    $compareResult = $number1<$number2 ? "Si" : "No";
    echo "$number1 < $number2 = $compareResult";

    echo "<h3>bigger than</h3>";
    $compareResult = $number1>$number2 ? "Si" : "No";
    echo "$number1 > $number2 = $compareResult";

    echo "<h3>less than or equal than</h3>";
    $compareResult = $number1>=$number2 ? "Si" : "No";
    echo "$number1 > $number2 = $compareResult";

    echo "<h3>bigger than or equal than</h3>";
    $compareResult = $number1<=$number2 ? "Si" : "No";
    echo "$number1 > $number2 = $compareResult";