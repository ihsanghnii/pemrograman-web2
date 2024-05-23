<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = [
            'header' => "Dashboard Admin",
            'title' => "Selamat Datang Admin Ihsan Ghani !",
            'caption' => "Ini adalah halaman admin",
            'footer' => "Footer",
            'data_pgw' => [
                ["nama" => "Ihsan Ghani", "jabatan" => "Direktur"],
                ["nama" => "Al Ghiffari Abidzar", "jabatan" => "Wakil Direktur"],
                ["nama" => "M Rafkhaihza Haardandi", "jabatan" => "Manajer"],
                ["nama" => "M Zacky Alvansyah", "jabatan" => "Wakil Manajer"],
            ]
        ];

        return view('pegawai.index', $pegawai);
    }
}