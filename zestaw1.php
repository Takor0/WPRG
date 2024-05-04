<?php

function zad1()
{
    $tablica = array("jablko", "banan", "pomarancza");
    foreach ($tablica as $x) {
        echo reverse($x) . "\n";
    }
}

function reverse($string)
{
    $length = strlen($string) - 1;
    $newString = "";
    for ($i = $length; $i != -1; $i--) {
        $newString .= $string[$i];
    }
    return $newString;
}

function czy_pierwsza($x)
{
    if ($x === 1) return false;
    for ($i = 2; $i < $x; $i++) {
        if ($x % $i === 0) return false;
    }
    return true;
}

function zad2($x, $y)
{
    for ($i = $x; $i <= $y; $i++) {
        if (czy_pierwsza($i)) {
            echo $i . " ";
        }
    }
    echo "\n";
}

function tablica_fib($n)
{
    $lista = array();
    $i = 1;
    $a = 1;
    $b = 0;
    while ($i < $n + 1) {
        array_push($lista, $a);
        $a = $a + $b;
        $b = $a - $b;
        $i++;
    }
    return $lista;
}

function zad3($n)
{
    $fib_arr = tablica_fib($n);
    $index = 1;
    foreach ($fib_arr as $x) {
        if ($x % 2 != 0) {
            echo $index . '. ' . $x . "\n";
            $index++;
        }
    }
}

function zad4()
{
    $teskt = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
    $tablica = explode(" ", $teskt);
    $tablica2 = array();
    foreach ($tablica as $el) {
        if (!str_contains($el, ',') && !str_contains($el, '.') && !str_contains($el, "'")) {
            array_push($tablica2, $el);
        }
    }

    $tablica_as = array();
    $len = count($tablica2);
    for($i=0; $i<$len; $i=$i+2) {
        $tablica_as[$tablica2[$i]] = $tablica2[$i+1];
    }
    foreach ($tablica_as as $key => $value) {
        echo $key." => ".$value."\n";
    }

}


zad1();
zad2(2, 11);
zad3(10);
zad4();




