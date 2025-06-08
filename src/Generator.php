<?php

namespace Fakenik;

class Generator
{
    public static function generate(
        $day,
        $month,
        $year,
        $provinsi = '52',
        $kabupaten = '05',
        $kecamatan = '06'
    ) {
        $provinsi = \config('fakenik.default_code.province');
        $kabupaten = \config('fakenik.default_code.regency');
        $kecamatan = \config('fakenik.default_code.district');
        $tanggalLahirFormatted = sprintf(
            "%02d%02d%02d",
            $day,
            $month,
            $year % 100
        );
        $random = str_pad(random_int(0, 9999), 4, '0', STR_PAD_LEFT);
        return "{$provinsi}{$kabupaten}{$kecamatan}{$tanggalLahirFormatted}{$random}";
    }
}
