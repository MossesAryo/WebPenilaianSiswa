<?php

namespace App\Http\Controllers\back;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\mata_pelajaran;
use App\Http\Controllers\Controller;

class MataPelajaranController extends Controller
{
    public function index()
    {
        return view('back.admin.mataPelajaran.mataPelajaran', [
            'pelajaran' => mata_pelajaran::get()
        ]);
    }
    public function store(Request $request )
    {
        $data = $request->validate([
            'kode' => 'required|min:3',
            'mata_pelajaran' => 'required|min:3',
        ]);
        mata_pelajaran::create($data);

        return back()->with('success','Categories has been created');
    }
}
