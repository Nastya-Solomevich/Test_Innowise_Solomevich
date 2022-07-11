<?php

namespace Test_Innowise\Task3;

class Task3
{
    public static function sumOfNumbers(int $number): string
    {
        $numberToString = strval($number);
        $arr = str_split($numberToString);

        while (strlen($numberToString) != 1) {
            $pr_num = 0;
            $numberToString = $numberToString - 1;
            foreach ($arr as $value) {
                $pr_num += intval($value);
            }
            $arr = str_split(strval($pr_num));
        }

        return implode("", $arr);
    }
}

function main()
{
    echo Task3::sumOfNumbers(202070);
}

main();
