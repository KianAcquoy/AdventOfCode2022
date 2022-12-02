<?php

$list = [];
$content = fopen('calories.txt', 'r');
$cur = 0;   
while (($line = fgets($content)) != false) {
    $val = (int)$line;
    if ($val != 0) {
        $cur += $val;
    } else {
        array_push($list, $cur);
        $cur = 0;
    }

}
rsort($list);
echo 'Top 3 Elves: ' . ($list[0] + $list[1] + $list[2]);

?>