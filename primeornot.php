<?php
$n = 17;
$p = $n > 1;
for ($i = 2; $i <= sqrt($n); $i++) 
    if ($n % $i == 0) { $p = false; break; }
echo $p ? "$n is Prime" : "$n is Not Prime";
?>