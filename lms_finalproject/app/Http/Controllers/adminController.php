<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        return view('admin.pages.dashboard', ['user' => $user]);
    }
}
