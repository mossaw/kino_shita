<?php

function kinoshita($i, $max = 100)
{
    if ($i % 15 === 0) {
        echo '木舌', PHP_EOL;
    } elseif ($i % 3 === 0) {
        echo '木', PHP_EOL;
    } elseif ($i % 5 === 0) {
        echo '舌', PHP_EOL;
    } else {
        echo $i, PHP_EOL;
    }

    if ($i < $max) {
        kinoshita($i + 1, $max);
    }
}

kinoshita(1);