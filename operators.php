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

    echo "<h2>Logical Operators</h2>";

    echo "<h3>Operator &&</h3>";
    $compareResult = ($number1 == 1 && $number2 == 2) ? "Si" : "No";
    echo "El numero 1:  $number1 == 1 && el numero 2: $number2 == 2 se cumple las dos condiciones $compareResult";

    echo "<h3>Operator AND</h3>";
    $compareResult = ($number1 == 1 AND $number2 == 2) ? "Si" : "No";
    echo "El numero 1:  $number1 == 1 AND el numero 2: $number2 == 2 se cumple las dos condiciones $compareResult";

    echo "<h3>Operator ||</h3>";
    $compareResult = ($number1 == 1 || $number2 == 3) ? "Si" : "No";
    echo "El numero 1:  $number1 == 1 || el numero 2: $number2 == 3 se cumple una de las condiciones $compareResult";

    echo "<h3>Operator OR</h3>";
    $compareResult = ($number1 == 1 OR $number2 == 3) ? "Si" : "No";
    echo "El numero 1:  $number1 == 1 OR el numero 2: $number2 == 3 se cumple una de las condiciones $compareResult";

    echo "<h3>Operator !(NOT)</h3>";
    $compareResult = ($number1 == 1 OR $number2 == 3) ? "Si" : "No";
    echo "El numero 1:  $number1 == 1 OR el numero 2: $number2 == 3 solo se cumple una y no se cumple la otra $compareResult";

    echo "<h3>Operator XOR</h3>";
    $compareResult = ($number1 != 1 OR $number2 != 3) ? "Si" : "No";
    echo "El numero 1:  $number1 != 2 OR el numero 2: $number2 != 3 son diferentes de los numeros puestos $compareResult";