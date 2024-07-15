<?php
#Problem: The function results in an infinite loop.

function findElement($arr, $element) {
    $index = 0;
    while ($index < count($arr)) {
        if ($arr[$index] == $element) {
            return $index;
        }
        $index--;
    }
    return -1;
}

$array = [1, 2, 3, 4, 5];
echo findElement($array, 3);

?>