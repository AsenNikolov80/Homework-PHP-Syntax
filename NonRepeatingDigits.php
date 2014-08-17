<?php

function NonRepeatingDigits($n) {
    $result = [];
    for ($i = 100; $i <= $n && $i <= 999; $i++) {
        $firstDigit = $i % 10;
        $secondDigit = ((int) $i / 10) % 10;
        $thirdDigit = ((int) $i / 100) % 10;
        if ($firstDigit != $secondDigit && $secondDigit != $thirdDigit && $firstDigit != $thirdDigit) {
            array_push($result, $i);
        }
    }
    if (empty($result))
        return 'no <br /><br />';
    return implode(', ', $result) . '<br /><br />';
}

echo NonRepeatingDigits(1234);
echo NonRepeatingDigits(145);
echo NonRepeatingDigits(15);
echo NonRepeatingDigits(247);
?>