<?php
$x = true;
$y = false;
$z = true;

// Original expression
$result = (($x && $y) || !$z) && ($x || ($y && !$z));

// Simplify the expression
?>