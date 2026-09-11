@php
    $siswa = $siswa ?? null;
@endphp

<div class="form-group">
    <label for="nis">NIS</label>
    <input id="nis" name="nis" type="text" value="{{ old('nis', $siswa->nis ?? '') }}" required>
</div>

<div class="form-group">
    <label for="nama">Nama</label>
    <input id="nama" name="nama" type="text" value="{{ old('nama', $siswa->nama ?? '') }}" required>
</div>

<div class="form-group">
    <label for="kelas_id">Kelas</label>
    <select id="kelas_id" name="kelas_id" required>
        <option value="">-- Pilih Kelas --</option>
        @foreach ($kelas as $item)
            <option value="{{ $item->id }}" @selected(old('kelas_id', $siswa->kelas_id ?? null) == $item->id)>{{ $item->nama_kelas }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin</label>
    <select id="jenis_kelamin" name="jenis_kelamin">
        <option value="">-- Tidak diisi --</option>
        <option value="L" @selected(old('jenis_kelamin', $siswa->jenis_kelamin ?? null) === 'L')>Laki-laki</option>
        <option value="P" @selected(old('jenis_kelamin', $siswa->jenis_kelamin ?? null) === 'P')>Perempuan</option>
    </select>
</div>

<div class="form-actions">
    <button class="btn btn-primary" type="submit">Simpan</button>
    <a class="btn btn-secondary" href="{{ route('siswa.index') }}">Batal</a>
</div>
