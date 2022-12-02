<?php

$lose = array(
    'A'=>'C',
    'B'=>'A',
    'C'=>'B',
);
$win = array(
    'A'=>'B',
    'B'=>'C',
    'C'=>'A',
);
$scores = array(
    'A'=>1,
    'B'=>2,
    'C'=>3,
);

$score = 0;
$content = fopen('rps.txt', 'r');
while (($line = fgets($content)) != false) {
    $line = str_replace(PHP_EOL, '', $line);
    $c1 = substr($line, 0, 1);
    if (str_contains($line, 'X')) {
        $score += $scores[$lose[$c1]];
    } else if (str_contains($line, 'Y')) {
        $score += 3 + $scores[$c1];
    } else if (str_contains($line, 'Z')) {
        $score += 6 + $scores[$win[$c1]];
    }

}

echo 'Your score is: ' . $score . PHP_EOL;

?>