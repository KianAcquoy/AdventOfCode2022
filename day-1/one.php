<?php

$content = fopen('calories.txt', 'r');
$cur = 0;
$curhighest = 0;
while (($line = fgets($content)) != false) {
    $val = (int)$line;
    if ($val != 0) {
        $cur += $val;
    } else {
        $cur = 0;
    }
    if ($cur > $curhighest) {
        $curhighest = $cur;
    }
}
echo 'Highest value: ' . $curhighest;

?>