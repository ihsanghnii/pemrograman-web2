<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create([
            "nama" => "ihsan",
            "email" => "ihsan@gmail.com",
            "status" => "aktif",
            "alamat" => "jalan raya",
            "gender" => "Laki-Laki"
        ]);
    }
}
