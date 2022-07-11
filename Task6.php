<?php 

namespace Test_Innowise\Task6;

use DateInterval;
use DatePeriod;
use DateTime;

class Task6 
{
    public static function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = "Monday")
    {
        $count = 0;
        $from = new DateTime($year."-".$month."-1");
        $to = new DateTime($lastYear."-".$lastMonth."-31");
        $interval = new DateInterval('P1D');
        $period = new DatePeriod($from, $interval, $to);
        foreach($period as $date){
            if (($date->format("d") == 01) and ($date -> format("w") == 1)) {
                $count++;
            }
        }

        echo $count;
    }
}
// date("D", mktime(0, 0, 0, $date->format("mdY"))) == $day
Task6 :: main(2022, 2022, 1, 12);
?>  