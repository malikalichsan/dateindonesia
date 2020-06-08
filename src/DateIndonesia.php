<?php

namespace Malikalichsan\DateIndonesia;

use Carbon\Carbon;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation;
use Illuminate\Contracts\Translation\Loader;

class DateIndonesia
{
    public $lang;

    public function __construct($lang = 'id')
    {
        $this->lang = $this->trans($lang);
    }

    public function trans($lang)
    {
        $filesystem    = new Filesystem();
        $loader        = new Translation\FileLoader($filesystem, dirname(dirname(__FILE__)) . '/src/lang');
        $loader->addNamespace('lang', dirname(dirname(__FILE__)) . '/lang');
        $loader->load($lang, 'validation', 'lang');
        return new Translation\Translator($loader, $lang);
    }

    public function getDay($day)
    {
        /**
         * 0 (for Sunday) through 6 (for Saturday)
         */

        switch ($day) {
            case 0:
                $res = $this->lang->get('message.days.00');
                break;
            case 1:
                $res = $this->lang->get('message.days.01');
                break;
            case 2:
                $res = $this->lang->get('message.days.02');
                break;
            case 3:
                $res = $this->lang->get('message.days.03');
                break;
            case 4:
                $res = $this->lang->get('message.days.04');
                break;
            case 5:
                $res = $this->lang->get('message.days.05');
                break;
            case 6:
                $res = $this->lang->get('message.days.06');
                break;
            default:
                $res = "";
        }

        return $res;
    }

    public function getMonth($month)
    {
        /**
         * 01 through 12
         */

        switch ($month) {
            case 1:
                $res = $this->lang->get('message.months.01');
                break;
            case 2:
                $res = $this->lang->get('message.months.02');
                break;
            case 3:
                $res = $this->lang->get('message.months.03');
                break;
            case 4:
                $res = $this->lang->get('message.months.04');
                break;
            case 5:
                $res = $this->lang->get('message.months.05');
                break;
            case 6:
                $res = $this->lang->get('message.months.06');
                break;
            case 7:
                $res = $this->lang->get('message.months.07');
                break;
            case 8:
                $res = $this->lang->get('message.months.08');
                break;
            case 9:
                $res = $this->lang->get('message.months.09');
                break;
            case 10:
                $res = $this->lang->get('message.months.10');
                break;
            case 11:
                $res = $this->lang->get('message.months.11');
                break;
            case 12:
                $res = $this->lang->get('message.months.12');
                break;
            default:
                $res = "";
        }

        return $res;
    }

    public function getFormatted($data)
    {
        /**
         * date format in param should be
         * w d m Y H i T
         */
        $explodeData    = explode(' ', $data);
        $day            = $this->getDay($explodeData[0]);
        $month          = $this->getMonth($explodeData[2]);
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
