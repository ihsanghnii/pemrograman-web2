<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            "nama" => "ahmad",
            "alamat" => "jalan raya",
            "nohp" => "081234567891",
            "email" => "admin@gmail.com",
            "positions_id" => 1
        ]);
}}