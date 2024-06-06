<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            "title" => "Supernova: Ksatria, Puteri, dan Bintang Jatuh",
            "isbn" => "978-979-96257-1-3",
            "deskripsi" => "Supernova: Ksatria, Puteri, 
                            dan Bintang Jatuh adalah novel fiksi ilmiah yang ditulis oleh Dewi Lestari, 
                            lebih dikenal sebagai Dee. Buku ini merupakan seri pertama dari serial Supernova.
                            Ceritanya menggabungkan elemen sains, spiritualitas, dan romansa, 
                            serta mengisahkan tentang sepasang sahabat yang mencoba menulis cerita yang 
                            sempurna sambil menjelajahi makna kehidupan dan hubungan antarmanusia.",
            "penulis" => "Dewi Lestari (Dee)",
            "penerbit" => "Truedee Books",
            "cover_img" => "",
            "genres_id" => 1
        ]);
    }
}
