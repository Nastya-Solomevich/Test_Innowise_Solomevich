<?php 

namespace Test_Innowise\Task6;

use DateInterval;
use DatePeriod;
use DateTime;

class Task6 
{
    public static function dayOfWeek(int $year, int $lastYear, int $month, int $lastMonth, int $day = 1): int 
    {
        $count = 0;
        $from = new DateTime($year."-".$month."-1");
        $to = new DateTime($lastYear."-".$lastMonth."-31");
        $interval = new DateInterval('P1D');
        $period = new DatePeriod($from, $interval, $to);
        foreach($period as $date){
            if (($date->format("d") == 01) and ($date -> format("w") == $day)) {
                $count++;
            }
        }

        return $count;
    }
}

function main() 
{
    echo Task6 :: dayOfWeek(2022, 2022, 1, 12);
}

main();

