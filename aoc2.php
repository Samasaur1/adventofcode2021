<?php
$lines = file("file.txt");
$forward = 0;
$up = 0;
$down = 0;
foreach ($lines as $line) {
    $arr = explode(" ", $line);
    $var = $arr[0];
    $num = $arr[1][0];
    $$var += $num;
}
echo ($down - $up) * $forward;
?>
