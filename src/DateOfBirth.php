<?php

namespace Fakenik;

class DateOfBirth
{
    public static function generateBirthYear($min = 1980, $max = 2010)
    {
        $min = \config('fakenik.birth_year_range.min');
        $max = \config('fakenik.birth_year_range.max');
        return random_int($min, $max);
    }
    public static function generateBirthMonth(): int
    {
        return random_int(1, 12);
    }
    public static function generateBirthDay(int $month, int $year): int
    {
        $daysInMonth = date('t', mktime(0, 0, 0, $month, 1, $year));
        return random_int(1, $daysInMonth);
    }
}
