<?php

namespace Test_Innowise\Task4;

class Task4 
{
    static public function main(string $quote)
    {
        $arr1 = str_split($quote);
        $arr2 = [" ", "-", "_"];
        $result = array_diff($arr1, $arr2);
        echo implode("", $result);
    }

}

Task4 ::main("The quick-brown_fox jumps over the_lazy-dog");

?>