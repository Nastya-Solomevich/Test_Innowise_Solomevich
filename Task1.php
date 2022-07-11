<?php

namespace Test_Innowise\Task1;

class Task1
{
    public static function weather(int $degree): string
    {
        $testresult = ($degree <= 10) ? "Temperature lower or equals than 10" : ((($degree > 10) && ($degree <= 20)) ? "Temperature more than 10 degree" : ((($degree > 20) && ($degree <= 30)) ? "Temperature more than 20 degree" : "Temperature more than 30 degree"));

        return $testresult;
    }
}

function main() 
{
    $degree = 18; 
    echo Task1 :: weather($degree);
}

main();

?>