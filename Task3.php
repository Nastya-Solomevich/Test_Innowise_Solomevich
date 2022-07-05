<?php

namespace Test_Innowise\Task3;

class Task3 
{
    public static function main(int $number) 
    {
        $numberToString = strval($number);
        $arr = str_split($numberToString);
        while (strlen($numberToString)!=1)
        {
            $pr_num = 0;
            $numberToString = $numberToString-1;
            foreach($arr as $value)
            {
                $pr_num+=intval($value);
            }
            $arr=str_split(strval($pr_num));
        }
        echo implode("",$arr);

    } 
}

Task3 :: main(20207070); 

?>