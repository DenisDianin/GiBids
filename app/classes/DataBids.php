<?php

namespace app\classes;

class DataBids
{
    public static $dataPath = __DIR__ . '/../../data/data.json';

    public static function getData()
    {
        // Check file availability
        if (!file_exists(self::$dataPath)) :
            echo "Data is missing!";
            exit;
        // Check the compliance with JSON format
        elseif (!json_decode(file_get_contents(self::$dataPath))) :
            echo "Data is incorrect!";
            exit;
        // Return data
        else :
            return file_get_contents(self::$dataPath);
        endif;
    }
}
