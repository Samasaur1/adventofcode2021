<?php
$lines = file("file.txt");
$aim = 0;
$depth = 0;
$horiz = 0;
function up(int $n) {
    global $aim;
    $aim -= $n;
}
function down(int $n) {
    global $aim;
    $aim += $n;
}
function forward(int $n) {
    global $aim, $depth, $horiz;
    $depth += ($aim * $n);
    $horiz += $n;
}
foreach ($lines as $line) {
    $arr = explode(" ", $line);
    $var = $arr[0];
    $num = $arr[1][0];
    $var($num);
}
echo $depth * $horiz;
?>
