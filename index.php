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

function transliterate($st, $symb)
{
    $pattern = [
        'а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п',
        'р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',
        'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П',
        'Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я'
    ];
    $replace = [
        /*
        'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p',
        'r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya',
        'A','B','V','G','D','E','Io','Zh','Z','I','Y','K','L','M','N','O','P',
        'R','S','T','U','F','H','Ts','Ch','Sh','Sht','A','I','Y','e','Yu','Ya'
        */
        'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p',
        'r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya',
        'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p',
        'r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya',

    ];
    $st = str_replace($pattern, $replace, $st);
    $st = preg_replace('/[^ \w]/', '', $st);
    $st = str_replace(' ',$symb,$st);
    return $st;
}

echo transliterate('В Мариуполе по просьбе Блока Бойченко и "Слуг народа" объявили результаты выборов,- ФОТО, ВИДЕО','-');