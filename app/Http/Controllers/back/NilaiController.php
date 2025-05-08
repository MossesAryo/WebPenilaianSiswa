<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        return view('back.admin.nilai.nilai', [
            'nilai' => nilai::get()
        ]);
    }
    public function store(Request $request )
    {
        $data = $request->validate([
            'kode' => 'required|min:3',
            'mata_pelajaran' => 'required|min:3',
        ]);
        nilai::create($data);

        return back()->with('success','Categories has been created');
    }
}
