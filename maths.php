<?php
    echo "<h2>Maths</h2>";
    $number1 = -3.2;

    echo "<h4>Absolute value</h4>";
    echo "The absolute value of -3 is" . abs($number1);

    echo "<h4>Round value</h4>";
    echo "The absolute value of -3 is" . round($number1);

    echo "<h4>Max value</h4>";
    echo "The max value of 1, 2, 3, 4, 5 is" . max(1, 2, 3, 4, 5);

    echo "<h4>Min value</h4>";
    echo "The min value of 1, 2, 3, 4, 5 is" . min(1, 2, 3, 4, 5);

    echo "<h4>Random value</h4>";
    echo "The min value of 1, 2, 3, 4, 5 is" . rand(1, 5);