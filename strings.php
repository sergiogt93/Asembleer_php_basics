<?php

    echo "<h2>Strings</h2>";

    echo "<h4>Print a string</h4>";
    echo "HELLO!<br>";

    $string = "HELLO!";

    echo "<h4>Print a string variable</h4>";
    echo "$string<br>";

    echo "<h4>Replace String(No Case sensitive)</h4>";
    echo  str_replace("%hello%", $string, "hello"). "<br>";

    echo "<h4>Replace String(Case sensitive)</h4>";
    echo  str_ireplace("%hello%", $string, "HELLO"). "<br>";

    echo "<h4>Trnaform uppercase</h4>";
    echo  strtoupper($string). "<br>";

    echo "<h4>Trnaform lowercase</h4>";
    echo  strtolower($string). "<br>";

    echo "<h4>Time n repeat string</h4>";
    echo  str_repeat("repeat", 2). "<br>";

    echo "<h4>Length string</h4>";
    echo  strlen($string). "<br>";

    echo "<h4>First occurence string</h4>";
    echo  strpos($string, "h"). "<br>";