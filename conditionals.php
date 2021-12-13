<?php
    echo "<h3>Conditionals</h3>";
    $today = getDate();

    if($today["weekday"] == "Monday") {
        echo "We are mondays<br>";
    }

    if($today["month"] == "October") {
        echo "We are in october<br>";
    } else {
        echo $today['month'] . "<br>";
    }

    if($today["minutes"] < 10) {
        echo "The current minute is less than 10<br>";
    } if($today["minutes"] > 15) {
        echo "The current minute is more than 15<br>";
    } else {
        "Does not meet any conditions";
    }

    switch ($today["wday"]) {
        case 1:
            echo "Monday<br>";
            break;
        case 2:
            echo "Tuesday<br>";
            break;
        case 3:
            echo "Wednesday<br>";
            break;
        case 4:
            echo "Thursday<br>";
            break;
        case 5:
            echo "Friday<br>";
            break;
        case 6:
            echo "Saturday<br>";
            break;
        case 7:
            echo "Sunday<br>";
            break;
    }