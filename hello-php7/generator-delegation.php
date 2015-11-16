<?php

function gen()
{
    yield 1;
    yield 2;

    return yield from gen2();
}

function gen2()
{
    yield 3;

    return 4;
}

$gen = gen();

foreach ($gen as $val) {
    echo $val, PHP_EOL;
}

echo $gen->getReturn(), PHP_EOL;

?>
