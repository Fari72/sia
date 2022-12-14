<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Kelas;

class DashboardController extends Controller
{
    public function index()
    {
        $guru = Guru::count();
        $siswa = Siswa::count();
        $kelas = Kelas::count();
        $mapel = Mapel::count();
        return view('dashboard.index', compact('guru', 'siswa', 'kelas', 'mapel'));

        $id_siswa = auth()->user()->id;

        $find_siswa = Siswa::where('user_id',$id_siswa)->get();
        return view('dashboard.index', compact('guru', 'kelas', 'mapel', 'siswa', 'find_siswa'));
    }
}
