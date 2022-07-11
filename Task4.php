<?php

namespace Test_Innowise\Task4;

class Task4
{
    static public function delateSymbols(string $quote): string
    {
        $arr1 = str_split($quote);
        $arr2 = [" ", "-", "_"];
        $result = array_diff($arr1, $arr2);
        return implode("", $result);
    }
}

function main()
{
    $string = "The quick-brown_fox jumps over the_lazy-dog";
    echo Task4::delateSymbols($string);
}

main();
