<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return view('kelas.index', ['kelas' => Kelas::withCount('siswa')->orderBy('nama_kelas')->get()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => ['required', 'string', 'max:100', 'unique:kelas,nama_kelas'],
        ]);

        Kelas::create($request->only('nama_kelas'));

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan.');
    }

    public function destroy(Kelas $kela)
    {
        if ($kela->siswa()->exists()) {
            return redirect()->route('kelas.index')->with('error', 'Kelas tidak dapat dihapus karena masih memiliki siswa.');
        }

        $kela->delete();

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus.');
    }
}
