<?

namespace Test_Innowise\Task10;

class Task10 
{
    public static function toOne(int $number) : array
    {
        $arr = [$number];
        while ($number != 1) 
        {
            if ($number % 2 == 0) 
            {
                $number = $number / 2;
                array_push($arr, $number);
            }
            else 
            {
                $number = $number * 3 + 1;
                array_push($arr, $number);
            }
        }

        return $arr;
    }
}

function main() 
{
    var_dump(Task10 :: toOne(12));
}

main();

?>
