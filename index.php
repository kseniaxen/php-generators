<?php
/* $result = foo();
function foo(){echo 'hello';}
echo var_dump($result); */

/* function fooGen()
{
    yield 10;
    $fetched = yield 500;
    // var_dump($fetched);
    if ($fetched){
        yield 300;
    } else {
        return;
    }
} */
// обработчик функции fooGen
// $generator = fooGen();
// var_dump($generator);
// выполнить последовательно все вызовы yield
// из функции fooGen, получая результаты и распечатывая их
/* foreach ($generator as $item) {
    echo $item . "\n";
} */

/* $generator->next();
var_dump($generator->current()); */
/* do {
    echo $generator->current() . " (" . $generator->valid() . ")\n";
    $generator->next();
} while ($generator->valid());

var_dump($generator->current()); */
// вызов текущего yield
/* var_dump($generator->current());
// переход к готовности вызвать следующий yield
$generator->next();
var_dump($generator->current());
// передача значения внутрь в строку текущего yield
// и переход к готовности вызвать следующий yield
$generator->send(false);
var_dump($generator->current()); */

// b++ 396760
// without b++ 396632
// 128
// echo memory_get_usage() . "\n";
// echo memory_get_usage(true) . "\n";
$startMemory = memory_get_usage();
echo "Hello";
flush();
$a = 10;
$b = $a;
$b++;
$c = $b;
$c++;
echo $a;
echo "\n";
echo $b;
echo "\n";
echo (memory_get_usage() - $startMemory) . "\n";
// echo memory_get_usage() . "\n";
// echo memory_get_usage(true) . "\n";