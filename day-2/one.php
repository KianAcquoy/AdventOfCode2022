<?php

$scores = array(
    'X'=>1,
    'Y'=>2,
    'Z'=>3,
);

$score = 0;
$content = fopen('rps.txt', 'r');
while (($line = fgets($content)) != false) {
    $line = str_replace(PHP_EOL, '', $line);
    $c2 = substr($line, -1, 1);
    if (str_contains($line, 'A') && str_contains($line, 'Y')) {
        $score += 6 + $scores[$c2];
    } else if (str_contains($line, 'B') && str_contains($line, 'Z')) {
        $score += 6 + $scores[$c2];
    } else if (str_contains($line, 'C') && str_contains($line, 'X')) {
        $score += 6 + $scores[$c2];
    } else if ((str_contains($line, 'A') && str_contains($line, 'X')) || (str_contains($line, 'B') && str_contains($line, 'Y')) || (str_contains($line, 'C') && str_contains($line, 'Z'))) {
        $score += 3 + $scores[$c2];
    } else {
        $score += $scores[$c2];
    }
}

echo 'Your score is: ' . $score . PHP_EOL;

?>