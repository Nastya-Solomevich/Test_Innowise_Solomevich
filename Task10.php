<?
namespace Test_Innowise\Task10;

class Task10 
{
    public static function main(int $number) 
    {
        $arr = [$number];
        while ($number != 1) {
            if ($number % 2 == 0) {
                $number = $number/2;
                array_push($arr, $number);
            }
            else {
                $number = $number*3+1;
                array_push($arr, $number);
            }
        }

        return $arr;
    }
}

var_dump(Task10 :: main(12));

?>
