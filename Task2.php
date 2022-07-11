<?php

namespace Test_Innowise\Task2;;

class Task2
{
    public static function countOfDays(string $birthdayPerson): string
    {
        $currentDate = date_create(date("d-m-Y"));

        $arrayDate = explode(".", $birthdayPerson);
        $newBirthDate = implode("-", $arrayDate);

        $birth = date_create($newBirthDate);
        $interval = date_diff($currentDate, $birth);

        return $interval->format('Since ' . $birthdayPerson . ' have passed %R%a days');;
    }
}

function main()
{
    $day = "14.08.2002";
    echo Task2::countOfDays($day);
}

main();
