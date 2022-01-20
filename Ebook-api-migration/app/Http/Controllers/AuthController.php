<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'status' => '200',
            'message' => 'success',
            'Nis' => '3103119007',
            'Nama' => 'Ainda Rahma Khairunnissa',
            'Kelas' => 'XII RPL 1',
            'Absen' => '07',
            'TTL' => 'Banyumas, 17 Desember 2003'
        ];
    }
}
