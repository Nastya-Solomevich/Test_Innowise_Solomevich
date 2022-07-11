<?php 

namespace Test_Innowise\Task8;

class Task8
{

    public static function main(string $json) 
    {
        $arr_json = json_decode($json);

        foreach ($arr_json as $elem => $data) {
            if (!is_string($data)){
                foreach ($data as $new_elem => $new_data)
                echo $new_elem, ": ", $new_data, "<br>";
            }
            else {
                echo $elem, ": ", $data, "<br>";
            }
        }

    }

}

$json = '{
    "Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail": {
    "Publisher": "Little Brown"
    }
    }
    ';

Task8 ::main($json);

?>