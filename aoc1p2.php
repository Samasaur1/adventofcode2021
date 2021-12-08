<?php
$lines = file("file.txt");

$last = 0;
foreach($lines as $idx => $line) {
    ${"_" . $idx} = intval($line);
    if ($idx < 1) continue;
    ${"_" . ($idx - 1)} += $line;
    if ($idx < 2) continue;
    ${"_" . ($idx - 2)} += $line;
    $last = $idx;
}

$count = 0;
$prev = $_0;
for ($i = 1; $i <= $last - 2; $i++) {
    if (${"_" . $i} > $prev) $count++;
    $prev = ${"_" . $i};
}

echo $count;
?>
