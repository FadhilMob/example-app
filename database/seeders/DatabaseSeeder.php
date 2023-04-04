<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RakModel;
use App\Models\KategoriModel;
use App\Models\BukuModel;
use App\Models\AnggotaModel;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // ISI RAK MODEL
        RakModel::create([
            'nama_rak' => 'I',
            'nomor_rak' => '132',
            'kategoribuku_id' => '1'
        ]);
        RakModel::create([
            'nama_rak' => 'A',
            'nomor_rak' => '145',
            'kategoribuku_id' => '1'
        ]);
        RakModel::create([
            'nama_rak' => 'P',
            'nomor_rak' => '109',
            'kategoribuku_id' => '2'
        ]);
     

        // ISI KATEGORI MODEL
        KategoriModel::create([
            'kategori_buku' => 'Ilmu Murni',
            'total' => '122'
        ]);

        KategoriModel::create([
            'kategori_buku' => 'Ilmu Hukum',
            'total' => '102'
        ]);

        KategoriModel::create([
            'kategori_buku' => 'Fiksi',
            'total' => '190'
        ]);
        

        // ISI BUKU MODEL
        BukuModel::create([
            'rakbuku_id' => '1',
            'kategoribuku_id' => '3',
            'kode_isbn' => '978979-665-548-2',
            'judul_buku' => 'Teknik Membaca Peta dan Kompas',
            'pengarang' => 'N.S. Adiwiyono'
        ]);
        BukuModel::create([
            'rakbuku_id' => '3',
            'kategoribuku_id' => '3',
            'kode_isbn' => '979-731-024-5',
            'judul_buku' => 'Fisika Modern',
            'pengarang' => 'Prof. Dr. Muljono'
        ]);
        BukuModel::create([
            'rakbuku_id' => '1',
            'kategoribuku_id' => '1',
            'kode_isbn' => '978-979-730-908-4',
            'judul_buku' => 'Pedoman Penulisan Karya Ilmiah',
            'pengarang' => 'Drs. Heri Djauhari,M.Pd'
        ]);
        BukuModel::create([
            'rakbuku_id' => '2',
            'kategoribuku_id' => '3',
            'kode_isbn' => '979-222-25-2-0',
            'judul_buku' => 'Menuju Olimpade Fisika untuk SMP / MTs',
            'pengarang' => 'Suparmi'
        ]);
        BukuModel::create([
            'rakbuku_id' => '3',
            'kategoribuku_id' => '2',
            'kode_isbn' => '979-534-713-2',
            'judul_buku' => 'Strategi Memenangkan Lomba Proyek Penelitian Ilmu Pengetahuan',
            'pengarang' => 'Joyce Henderson'
        ]);


        // ISI ANGGOTA MODEL
        AnggotaModel::create([
            'nama_anggota' => 'Andrea Lam',
            'kontak' => '08123456',
            'buku_id' => '4'
        ]);
        AnggotaModel::create([
            'nama_anggota' => 'Tila Pau',
            'kontak' => '08186995',
            'buku_id' => '1'
        ]);
        AnggotaModel::create([
            'nama_anggota' => 'Zakka Lam',
            'kontak' => '081657856',
            'buku_id' => '5'
        ]);
        AnggotaModel::create([
            'nama_anggota' => 'Manju Tu',
            'kontak' => '05653456',
            'buku_id' => '2'
        ]);
        AnggotaModel::create([
            'nama_anggota' => 'Stera Kum',
            'kontak' => '081233456',
            'buku_id' => '3'
        ]);

    }
}
