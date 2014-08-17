<?php

$firstNumber = 0;
$secondNumber = 0;

function sumTwoNumbers($firstNumber, $secondNumber) {
    $result = $firstNumber + $secondNumber;
    $result = number_format($result, 2);
    if (strpos($result, ',') !== FALSE) {
        $result=  str_replace(',', '', $result);
    }
    echo '$firstNumber + $secondNumber = ' . $firstNumber . ' + ' . $secondNumber . ' = ' . $result . '<br />';
}

sumTwoNumbers(1.567808, 0.356);
sumTwoNumbers(1234.5678, 333);
sumTwoNumbers(2, 5);
?>