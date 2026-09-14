<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class KelasController extends Controller
{
    public function index()
    {
        return view('kelas.index', ['kelas' => Kelas::withCount('siswa')->orderBy('nama_kelas')->get()]);
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => ['required', 'string', 'max:100', 'unique:kelas,nama_kelas'],
        ]);

        Kelas::create($request->only('nama_kelas'));

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan.');
    }

    public function show(Kelas $kela)
    {
        return view('kelas.show', compact('kela'));
    }

    public function edit(Kelas $kela)
    {
        return view('kelas.edit', compact('kela'));
    }

    public function update(Request $request, Kelas $kela)
    {
        $request->validate([
            'nama_kelas' => ['required', 'string', 'max:100', Rule::unique('kelas', 'nama_kelas')->ignore($kela)],
        ]);

        $kela->update($request->only('nama_kelas'));

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil diperbarui.');
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
