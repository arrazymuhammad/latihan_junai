<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['list_mahasiswa'] = collect([
            [
                'nim' => 12345,
                'nama' => 'Junaidi',
                'alamat' => 'Sui Besar'
            ],
            [
                'nim' => 12346,
                'nama' => 'Teguh',
                'alamat' => 'Mayak'
            ]
        ]);
        return view('mahasiswa.index', $data);
    }
}
