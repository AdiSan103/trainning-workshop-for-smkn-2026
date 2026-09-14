<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('kelas')->orderBy('nama')->get();

        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create', ['kelas' => Kelas::orderBy('nama_kelas')->get()]);
    }

    public function store(Request $request)
    {
        Siswa::create($this->validated($request));

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function show(Siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', [
            'siswa' => $siswa,
            'kelas' => Kelas::orderBy('nama_kelas')->get(),
        ]);
    }

    public function update(Request $request, Siswa $siswa)
    {
        $siswa->update($this->validated($request, $siswa));

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }

    private function validated(Request $request, ?Siswa $siswa = null)
    {
        return $request->validate([
            'nis' => ['required', 'string', 'max:50', Rule::unique('siswa', 'nis')->ignore($siswa)],
            'nama' => ['required', 'string', 'max:255'],
            'kelas_id' => ['required', 'integer', 'exists:kelas,id'],
            'jenis_kelamin' => ['nullable', Rule::in(['L', 'P'])],
        ]);
    }
}
