<?php

namespace Test_Innowise\Task2;;

class Task2
{
    public static function countOfDays(string $birthdayPerson): string
    {
        $current_date = date_create(date("d-m-Y"));

        $array_date = explode(".", $birthdayPerson);

        $new_birth_date = implode("-", $array_date);

        $birth = date_create($new_birth_date);

        $interval = date_diff($current_date, $birth);

        return $interval->format('Since ' . $birthdayPerson . ' have passed %R%a days');;
    }
}

function main()
{
    $day = "14.08.2002";
    echo Task2::countOfDays($day);
}

main();
