<?php

namespace App\Models;


class Blog {
   private static $blog_posts =[
    [
        "judul" => "DUWI WIRDA SEPTANIA",
            "deskripsi" => "Tentang Saya",
            "body" =>"Haii nama saya Duwi Wirda Septania, biasa dipanggil Duwi. Saya mahasiswa semester 4 dari jurusan Teknologi Informasi,
            prodi Teknik Informatika di Politeknik Negeri Jember. "
        ],
        [
            "judul" => "",
            "deskripsi" => "Riwayat Pendidikan",
            "body" =>"TK Dharma Wanita. SDN Arjasa 01 tahun 2010 sampai 2016. SMPN 10 Jember tahun 2016 sampai 2019.
            SMAN 1 Arjasa Jember (IPA) tahun 2019 sampai 2021. Politeknik Negeri Jember (Teknologi Informasi) tahun 2021 - 2025."
        ]
    ];
    public static function all(){
        return collect (self::$blog_posts);
    }
}
