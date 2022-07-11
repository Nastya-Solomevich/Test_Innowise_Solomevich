<?php 

namespace Test_Innowise\Task7;

class Task7
{
    public static function main (array $arr, int $position) 
    {
        $arr = array_values($arr);
        unset($arr[$position]);
        $arr_result = array_values(array_filter($arr));
        return $arr_result;
    }

}

$array = [1, 2, 3, 4, 5, 6];
print_r($array);
echo "<br>";
print_r(Task7 :: main($array, 3));