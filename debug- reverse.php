<?php
# Problem: The function may have performance issues with long strings. 
# Identify and optimize the function.

function reverseString($str) {
    $reversed = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}

echo reverseString("hello");


?>