<?php

/**
 * Created by PhpStorm.
 * User: PIFAGOR
 * Date: 09.04.2019
 * Time: 23:22
 */
class Format
{
    /**
     * Date format method
     * @param $date string
     * @param $format string
     * @return false|string
     */
    public static function dateFormat($date, $format = 'd/m/Y') {
        $new_date = date_create($date);
        $result = date_format($new_date, $format);
        return $result;
    }

    /**
     * Truncate text method
     * @param $text
     * @param $count
     * @param string $end
     * @return string
     */
    public static function cutText($text, $count, $end = '...') {
        return substr($text, 0, $count) . $end;
    }
}

