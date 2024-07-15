<?php
$a = true;
$b = false;
$c = true;

// Original expression
$result = (!($a && $b) || ($c && !$b)) && ($a || !$c);

?>