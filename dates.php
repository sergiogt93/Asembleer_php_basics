<?php
    $date = new DateTime();

    echo "<h3>Dates</h3>";

    echo "<h2>Complet date</h2>";
    echo date('Y-m-d H:i:s') . "<br>";

    echo "<h2>Actual day</h2>";
    echo date("d") . "<br>";

    echo "<h2>Actual month</h2>";
    echo date("m") . "<br>";

    echo "<h2>Actual minute</h2>";
    echo date("s") . "<br>";