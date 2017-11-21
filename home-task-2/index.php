<?php
$x = rand(0,100);
echo "Число: ".$x."<br />";

$firstVar = 1;
$secondVar = 1;
$thirdVar;

function countFunc (&$f, &$s, &$t, $x) {
    if ($f > $x) {
        echo 'Задуманное число не входит в числовой ряд';
    } elseif ($f == $x) {
        echo 'Задуманное число входит в числовой ряд';
    } else {
        $t = $f;
        $f += $s;
        $s = $t;
        countFunc ($f, $s, $t, $x);
    }
}
countFunc ($firstVar, $secondVar, $thirdVar, $x);

?>