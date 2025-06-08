<?php

// config/fakenik.php

return [

    /*
    |--------------------------------------------------------------------------
    | Kode Wilayah Default
    |--------------------------------------------------------------------------
    |
    | Tentukan kode provinsi, kabupaten, dan kecamatan default yang akan
    | digunakan jika tidak ada parameter yang diberikan saat generate NIK.
    |
    */
    'default_code' => [
        'province' => '52', // Contoh: Nusa Tenggara Barat
        'regency'  => '05', // Contoh: Kabupaten Dompu
        'district' => '06', // Contoh: Kecamatan Pekat
    ],

    /*
    |--------------------------------------------------------------------------
    | Rentang Tahun Lahir Default
    |--------------------------------------------------------------------------
    |
    | Tentukan rentang tahun minimal dan maksimal untuk tanggal lahir
    | yang di-generate secara acak.
    |
    */
    'birth_year_range' => [
        'min' => 1970,
        'max' => 2010,
    ],

];
