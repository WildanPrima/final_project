<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $mapels = [
            [
                'name' => 'Bahasa Indonesia',
                'description' => 'when an unknown printer took a galley of type and scrambled',
                'students' => 32,
                'image' => 'path/to/image1.jpg'
            ],
            [
                'name' => 'Matematika',
                'description' => 'when an unknown printer took a galley of type and scrambled',
                'students' => 32,
                'image' => 'path/to/image2.jpg'
            ],
            [
                'name' => 'Bahasa Inggris',
                'description' => 'when an unknown printer took a galley of type and scrambled',
                'students' => 32,
                'image' => 'path/to/image2.jpg'
            ],
            [
                'name' => 'Pendidikan Kewarganegaraan',
                'description' => 'when an unknown printer took a galley of type and scrambled',
                'students' => 32,
                'image' => 'path/to/image2.jpg'
            ],
            [
                'name' => 'Ilmu Pengetahuan Sosial',
                'description' => 'when an unknown printer took a galley of type and scrambled',
                'students' => 32,
                'image' => 'path/to/image2.jpg'
            ],

        ];

        return view('mapel.index', compact('mapels'));
    }

}
