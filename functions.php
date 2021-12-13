<?php
    $num1 = 3;
    $num2 = 4;

    function sum($num1, $num2) {
        return $num1 + $num2;
    }

    function multiplication($num1, $num2) {
        return $num1 * $num2;
    }

    function division($num1, $num2) {
        return $num1 / $num2;
    }

    function operation($num1, $num2, $operator) {
        switch ($operator) {
            case '+':
                return sum($num1, $num2);
                break;
            case '*':
                return multiplication($num1, $num2);
                break;
            case '/':
                return division($num1, $num2);
                break;
        }
    }