<?php
function get_fib(int $top) {
    function get_fib_rec(int $top, int $pre, int $cur) {
        echo "$pre ";

        if ($cur < $top)
            return get_fib_rec($top, $cur, $cur + $pre);
        return 0;
    }

    get_fib_rec($top, 0, 1);
    echo "\n";
}

get_fib(10);