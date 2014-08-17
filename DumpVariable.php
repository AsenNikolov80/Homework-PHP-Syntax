<?php

$values = ['hello', 15, 1.234, array(1, 2, 3), (object) [2, 34]];

foreach ($values as $value) {
    if (is_numeric($value)) {
        var_dump($value);
    } else {
        echo gettype($value).'<br />';
    }
    
}
?>

