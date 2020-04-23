<?php
function bin_search(array $arr, $value) {
    $left = 0;
    $right = count($arr) - 1;

    while ($left < $right) {
        $middle = intdiv($left + $right, 2);

        if ($arr[$middle] === $value)
            return $middle;
        else if ($arr[$middle] > $value)
            $right = $middle - 1;
        else
            $left = $middle + 1;
    }

    return -1;
}

$my_arr1 = [ 1, 2, 3, 5, 9, 15 ];
assert(bin_search($my_arr1, 3) == 2);
assert(bin_search($my_arr1, 21) == -1);
$my_arr2 = ["abc", "dfg", "hij"];
assert(bin_search($my_arr2, "dfg") === 1);
assert(bin_search($my_arr2, "klm") === -1);