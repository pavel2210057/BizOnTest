<?php
function calc_weekend(int $range_beg, int $range_end) : int {
    assert($range_beg < $range_end);

    $beg = 8 - $range_beg % 7; //конец 1 недели
    $end = $range_end % 7;     //начало последней недели
    $mid = intdiv(             //полные недели
        $range_end - $end - $range_beg - $beg + 1,
        7
    );

    //оставить максимум 2 выходных в 1 неделю
    if ($beg > 2)
        $beg = 2;

    return $beg + $mid * 2 + $end / 6;
}

echo calc_weekend(6, 28);