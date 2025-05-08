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
            'pelajaran' => mata_pelajaran::latest()->get()
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
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'kode' => 'required|min:3',
            'mata_pelajaran' => 'required|min:3',
        ]);
        $mapel = mata_pelajaran::find($id); 
        if ($mapel) {
            $mapel->update($data);
            return back()->with('success', 'Mata Pelajaran has been updated');
        }
    
        // Jika kategori tidak ditemukan
        return back()->with('error', 'Mata Pelajaran not found');
    }
    public function destroy(string $id)
    {
       mata_pelajaran::find($id)->delete();

       return back()->with('success','Category has been deleted');
    }
}
