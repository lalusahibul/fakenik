<?php

namespace Fakenik;

class Generator
{
    public static function generate($provinsi = '52', $kabupaten = '05', $kecamatan = '06')
    {
        $tanggal = date('dmy');
        $random = str_pad(random_int(0, 9999), 4, '0', STR_PAD_LEFT);
        return "{$provinsi}{$kabupaten}{$kecamatan}{$tanggal}{$random}";
    }
}
