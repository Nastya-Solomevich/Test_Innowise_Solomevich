<?php 

namespace Test_Innowise\Task9;

class Task9 
{
    public static function main(array $arr, int $number) {
        $arr = array_unique($arr);
        sort($arr);
        $new_arr = [];
        $first=0;
        $last = count($arr)-1;
        while($first < $last) {
            $sum = $arr[$first]+$arr[$last]+$arr[$first+1];
            if($sum == $number){
                array_push($new_arr, $arr[$first]."+".$arr[$last]."+".$arr[$first+1]."=".$number);
                $first++;
                $last--;
            }
            else {
                if ($sum < $number) {
                    $first++;
                }
                else{
                    $last--;
                }
            }
        }
        return $new_arr;
    }    
}

print_r(Task9 :: main ([1, 6, 5, 2, 7, 5, 1, 4, 3, 9, 8, 11, 10, 18, 12, 14, 13], 18));

?>