<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return
        [
            "NIS" => 3103119132,
            "Nama" => "Nabila Ayu ",
            "gender" => "Perempuan",
            "phone" => 6285736062644,
            "class" => "kk4 B RPL 4"
        ];
    }
}
