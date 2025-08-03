<?php
$c = 0; $n = 2;
while ($c < 100) {
    $p = true;
    for ($i = 2; $i <= sqrt($n); $i++)
        if ($n % $i == 0) { $p = false; break; }
    if ($p) { echo "$n\n"; $c++; }
    $n++;
}
?>