<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaporController extends Controller
{
    public function index()
    {
        // Data dummy untuk tabel
        $rapor = [
            ['subject' => 'Bahasa Indonesia', 'task1' => 80, 'task2' => 70, 'task3' => 60, 'exam' => 85],
            ['subject' => 'Matematika', 'task1' => null, 'task2' => null, 'task3' => null, 'exam' => null],
            ['subject' => 'Bahasa Inggris ', 'task1' => null, 'task2' => null, 'task3' => null, 'exam' => null],
            ['subject' => 'Pendidikan Kewarganegaraan', 'task1' => null, 'task2' => null, 'task3' => null, 'exam' => null],
            ['subject' => 'Ilmu Pengetahuan Sosial', 'task1' => null, 'task2' => null, 'task3' => null, 'exam' => null]
        ];

        return view('rapor.index', compact('rapor'));
    } //
}
