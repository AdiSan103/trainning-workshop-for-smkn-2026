<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nis', 'nama', 'kelas_id', 'jenis_kelamin'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
