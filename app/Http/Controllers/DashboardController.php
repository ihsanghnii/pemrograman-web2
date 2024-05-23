<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Dashboard";
        $name = "ihsan ghani";
        $nim = "0110223191";

        return view('dashboard.index', [
            'title' => $title,
            'nama' => $name,
            'nim' => $nim,
        ]);
    }

    public function laporan()
    {
        $data = [
            'title' => "Laporan Program Studi",
            'tahun' => 2024,
            'data_mhs' => [
                ["prodi" => "SI", "jumlah" => 1020],
                ["prodi" => "TI", "jumlah" => 1215],
                ["prodi" => "BD", "jumlah" => 62]
            ]
        ];

        return view('dashboard.laporan', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
