<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\Angkatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RaporController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user()->id;
        $siswa = Siswa::where('user_id', $user)->first();

        $angkatans = Angkatan::paginate(2);
        $angkatanNilais = [];

        foreach ($angkatans as $angkatan) {
            $nilais = Nilai::where('siswa_id', $siswa->id)
                            ->where('angkatan_id', $angkatan->id)
                            ->with('mapel')
                            ->get();

            $totalNilai = 0;
            $count = 0;
            foreach ($nilais as $nilai) {
                $average = ($nilai->tugas1 + $nilai->tugas2 + $nilai->tugas3 + $nilai->ujian) / 4;
                $nilai->average = $average;
                $totalNilai += $average;
                $count++;
            }

            $overallAverage = $count ? $totalNilai / $count : 0;
            $status = $overallAverage >= 70 ? 'Lulus' : 'Tidak Lulus';

            $angkatanNilais[] = [
                'angkatan' => $angkatan,
                'nilais' => $nilais,
                'overallAverage' => $overallAverage,
                'status' => $status
            ];
        }

        return view('siswa.pages.rapor', compact('siswa', 'angkatanNilais', 'angkatans'));
    }

    public function searching(Request $request)
    {
        $user = Auth::user()->id;
        $siswa = Siswa::where('user_id', $user)->first();
        $search = $request->input('search');

        $angkatans = Angkatan::where('class', 'like', '%' . $search . '%')->paginate(2);
        $angkatanNilais = [];

        foreach ($angkatans as $angkatan) {
            $nilais = Nilai::where('siswa_id', $siswa->id)
                            ->where('angkatan_id', $angkatan->id)
                            ->with('mapel')
                            ->get();

            $totalNilai = 0;
            $count = 0;
            foreach ($nilais as $nilai) {
                $average = ($nilai->tugas1 + $nilai->tugas2 + $nilai->tugas3 + $nilai->ujian) / 4;
                $nilai->average = $average;
                $totalNilai += $average;
                $count++;
            }

            $overallAverage = $count ? $totalNilai / $count : 0;
            $status = $overallAverage >= 70 ? 'Lulus' : 'Tidak Lulus';

            $angkatanNilais[] = [
                'angkatan' => $angkatan,
                'nilais' => $nilais,
                'overallAverage' => $overallAverage,
                'status' => $status
            ];
        }

        return view('siswa.pages.rapor', compact('siswa', 'angkatanNilais', 'angkatans', 'search'));
    }
}
