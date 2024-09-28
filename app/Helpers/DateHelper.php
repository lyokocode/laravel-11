<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper
{
    public static function timeAgo($date)
    {
        // Carbon nesnesine çevir
        $date = Carbon::parse($date);

        // Farkı hesapla
        $diffInSeconds = $date->diffInSeconds();

        if ($diffInSeconds < 60) {
            return $diffInSeconds . ' saniye önce';
        } elseif ($diffInSeconds < 3600) {
            $diffInMinutes = floor($diffInSeconds / 60);
            return $diffInMinutes . ' dakika önce';
        } elseif ($diffInSeconds < 86400) {
            $diffInHours = floor($diffInSeconds / 3600);
            return $diffInHours . ' saat önce';
        } elseif ($diffInSeconds < 604800) {
            $diffInDays = floor($diffInSeconds / 86400);
            return $diffInDays . ' gün önce';
        } elseif ($diffInSeconds < 2419200) { // 4 hafta
            $diffInWeeks = floor($diffInSeconds / 604800);
            return $diffInWeeks . ' hafta önce';
        } else {
            $diffInMonths = floor($diffInSeconds / 2419200);
            return $diffInMonths . ' ay önce';
        }
    }
}
