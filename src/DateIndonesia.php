<?php

namespace Malikalichsan\DateIndonesia;

use Carbon\Carbon;

class DateIndonesia
{
    public static function getDay($day)
    {
        /**
         * 0 (for Sunday) through 6 (for Saturday)
         */

        switch ($day) {
            case 0:
                $res = 'Minggu';
                break;
            case 1:
                $res = 'Senin';
                break;
            case 2:
                $res = 'Selasa';
                break;
            case 3:
                $res = 'Rabu';
                break;
            case 4:
                $res = 'Kamis';
                break;
            case 5:
                $res = 'Jumat';
                break;
            case 6:
                $res = 'Sabtu';
                break;
            default:
                $res = "";
        }

        return $res;
    }

    public static function getMonth($month)
    {
        /**
         * 01 through 12
         */

        switch ($month) {
            case 1:
                $res = 'Januari';
                break;
            case 2:
                $res = 'Februari';
                break;
            case 3:
                $res = 'Maret';
                break;
            case 4:
                $res = 'April';
                break;
            case 5:
                $res = 'Mei';
                break;
            case 6:
                $res = 'Juni';
                break;
            case 7:
                $res = 'Juli';
                break;
            case 8:
                $res = 'Agustus';
                break;
            case 9:
                $res = 'September';
                break;
            case 10:
                $res = 'Oktober';
                break;
            case 11:
                $res = 'November';
                break;
            case 12:
                $res = 'Desember';
                break;
            default:
                $res = "";
        }

        return $res;
    }

    public static function getFormatted($data)
    {
        /**
         * date format in param should be
         * w d m Y H i T
         */
        $explodeData    = explode(' ', $data);
        $day            = self::getDay($explodeData[0]);
        $month          = self::getMonth($explodeData[2]);
        $date           = $explodeData[1];
        $year           = $explodeData[3];
        $hour           = $explodeData[4];
        $minute         = $explodeData[5];
        $timezone       = $explodeData[6];

        return [
            'day' => $day,
            'month' => $month,
            'date' => $date,
            'year' => $year,
            'hour' => $hour,
            'minute' => $minute,
            'timezone' => $timezone,
        ];
    }
}
