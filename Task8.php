<?php

namespace Test_Innowise\Task8;

class Task8
{
    public static function decodeJson(string $json): array
    {
        $jsonToStringArray = [];

        $arrJson = json_decode($json);

        foreach ($arrJson as $elem => $data) {
            if (!is_string($data)) {
                foreach ($data as $newElem => $newData) {
                    array_push($jsonToStringArray, $newElem . ": " . $newData);
                }
            } else {
                array_push($jsonToStringArray, $elem . ": " . $data);
            }
        }

        return $jsonToStringArray;
    }
}

function main()
{
    $json = '{
            "Title": "The Cuckoos Calling",
            "Author": "Robert Galbraith",
            "Detail": {
            "Publisher": "Little Brown"
            }
            }
            ';

    var_dump(Task8::decodeJson($json));
}

main();
