<?php 

namespace Incurrent_dateiseTest\Task2;


class Task2
{

    public static function main(string $birthdayPerson) : string 
    {
        $current_date = date_create(date("d-m-Y"));
        $array_date = explode(".", $birthdayPerson);
        $new_birth_date = implode("-", $array_date);
        $birth = date_create($new_birth_date);
        $interval = date_diff($current_date, $birth);
        
        return $interval->format('Since '.$birthdayPerson.' have passed %R%a days');;
    }

}

echo Task2 :: main("14.08.2002");

?>