<?php

namespace Test_Innowise\Task7;

class Task7
{
    public static function keysNormal(array $arr, int $position): array
    {
        unset($arr[$position]);
        $arrKeys = [];
        $newArr = [];
        for ($i = 0; $i < count($arr); $i++) {
            array_push($arrKeys, $i);
        }
        $newArr = array_combine($arrKeys, $arr);
        return $newArr;
    }
}

function main()
{
    $array = [1, 2, 3, 4, 5, 6];
    print_r($array);
    echo "<br>";
    print_r(Task7::keysNormal($array, 3));
}

main();
