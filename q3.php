<?php
function search(array $arr) : int {
    $count = 0;
    foreach($arr as $value) {
        if (is_int($value / 3) && is_int($value / 5))
            ++$count;
    }
    return $count;
}

$my_arr = [15, 30, 31, 25, 45];
assert(search($my_arr) === 3);