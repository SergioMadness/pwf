<?php

namespace dlf;

class Helpers
{

    public static function hashString($string, $iteration = 5)
    {
        $result = $string;

        for ($i = 0; $i < $iteration; $i++) {
            $result = md5($result);
        }

        return $result;
    }
}