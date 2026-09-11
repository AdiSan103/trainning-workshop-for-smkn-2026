<?php

namespace Tests\Feature;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SiswaTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_create_and_view_student(): void
    {
        $kelas = Kelas::create(['nama_kelas' => 'XI RPL 1']);

        $response = $this->post(route('siswa.store'), [
            'nis' => '1001',
            'nama' => 'Siswa Contoh',
            'kelas_id' => $kelas->id,
            'jenis_kelamin' => 'L',
        ]);

        $response->assertRedirect(route('siswa.index'));
        $this->assertDatabaseHas('siswa', ['nis' => '1001', 'kelas_id' => $kelas->id]);
        $this->get(route('siswa.index'))
            ->assertOk()
            ->assertSee('Siswa Contoh')
            ->assertSee('XI RPL 1');
    }

    public function test_nis_must_be_unique(): void
    {
        $kelas = Kelas::create(['nama_kelas' => 'XI RPL 1']);
        Siswa::create(['nis' => '1001', 'nama' => 'Siswa Lama', 'kelas_id' => $kelas->id]);

        $this->from(route('siswa.create'))
            ->post(route('siswa.store'), [
                'nis' => '1001',
                'nama' => 'Siswa Baru',
                'kelas_id' => $kelas->id,
            ])
            ->assertRedirect(route('siswa.create'))
            ->assertSessionHasErrors('nis');
    }

    public function test_class_cannot_be_deleted_while_it_has_students(): void
    {
        $kelas = Kelas::create(['nama_kelas' => 'XI RPL 1']);
        Siswa::create(['nis' => '1001', 'nama' => 'Siswa Contoh', 'kelas_id' => $kelas->id]);

        $this->delete(route('kelas.destroy', $kelas))
            ->assertRedirect(route('kelas.index'))
            ->assertSessionHas('error');

        $this->assertDatabaseHas('kelas', ['id' => $kelas->id]);
    }
}
