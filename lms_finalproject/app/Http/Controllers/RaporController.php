<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RaporController extends Controller
{
    public function index()
    {
        //
        $user = Auth::user()->id;
        $siswa = Siswa::where('user_id', $user)->first();

        return view('siswa.pages.rapor', compact('siswa'));
    }
}
