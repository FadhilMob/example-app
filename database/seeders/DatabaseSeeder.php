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
            'nama_rak' => 'A',
            'nomor_rak' => '1',
            'kategoribuku_id' => '1'
        ]);
        RakModel::create([
            'nama_rak' => 'B',
            'nomor_rak' => '2',
            'kategoribuku_id' => '2'
        ]);
        RakModel::create([
            'nama_rak' => 'C',
            'nomor_rak' => '3',
            'kategoribuku_id' => '3'
        ]);
        RakModel::create([
            'nama_rak' => 'D',
            'nomor_rak' => '4',
            'kategoribuku_id' => '4'
        ]);
        
     

        // ISI KATEGORI MODEL
        KategoriModel::create([
            'kategori_buku' => 'UMKM',
            'total' => '16'
        ]);

        KategoriModel::create([
            'kategori_buku' => 'Bisnis',
            'total' => '12'
        ]);

        KategoriModel::create([
            'kategori_buku' => 'Dongeng',
            'total' => '6'
        ]);
        
        KategoriModel::create([
            'kategori_buku' => 'Lainnya',
            'total' => '17'
        ]);
        

        // ISI BUKU MODEL
        BukuModel::create([
            'rakbuku_id' => '2',
            'kategoribuku_id' => '2',
            'kode_isbn' => '978-602-453-252-9',
            'judul_buku' => 'Pengantar bisnis',
            'pengarang' => 'Sattar, S.E., M.Si.',
            'image' => '1681003251_1 Pengantar Bisnis.jpg',
            'dokumen' => '',
            'keterangan' => ''
        ]);
        BukuModel::create([
            'rakbuku_id' => '3',
            'kategoribuku_id' => '3',
            'kode_isbn' => '-',
            'judul_buku' => 'Dongeng-dongeng bintang',
            'pengarang' => 'Richard Scarry ; alihbahasa, Ramayanti B. Santoso',
            'image' => '1681003305_2 Dongeng Bintang.jpeg',
            'dokumen' => '',
            'keterangan' => ''
        ]);
        BukuModel::create([
            'rakbuku_id' => '1',
            'kategoribuku_id' => '1',
            'kode_isbn' => '978-602-6733-09-2',
            'judul_buku' => 'Kebangkitan pengusaha UMKM : membangun mental ownership-entrepreneur sejati bagi pengusaha UMKM',
            'pengarang' => 'Titien Agustina',
            'image' => '1681005606_3 UMKM.jpg',
            'dokumen' => '',
            'keterangan' => ''

        ]);
        // BukuModel::create([
        //     'rakbuku_id' => '3',
        //     'kategoribuku_id' => '3',
        //     'kode_isbn' => '979-511-857-9',
        //     'judul_buku' => 'Dongeng Kancil',
        //     'pengarang' => 'E. Siswoyo',
        //     'image' => '1681005627_4 Dongeng Kancil.jpg',
        //     'dokumen' => ''
        // ]);
        // BukuModel::create([
        //     'rakbuku_id' => '4',
        //     'kategoribuku_id' => '4',
        //     'kode_isbn' => '978-979-039-598-5',
        //     'judul_buku' => 'Kisah teladan para nabi seri 5 : Nabi Ibrahim, Nabi Ayub, Nabi Zulkifli, Nabi Ilyas, Nabi Muhammad',
        //     'pengarang' => 'Ari Prabowo',
        //     'image' => '1681005646_5 cerita.jpg',
        //     'dokumen' => ''
        // ]);
        // BukuModel::create([
        //     'rakbuku_id' => '1',
        //     'kategoribuku_id' => '1',
        //     'kode_isbn' => '978-623-00-1160-3',
        //     'judul_buku' => 'UMKM 4.0 : strategi UMKM memasuki era digital 4.0',
        //     'pengarang' => 'Wulan Ayodya',
        //     'image' => '1681005665_6 umkm.jpg',
        //     'dokumen' => ''
        // ]);
        // BukuModel::create([
        //     'rakbuku_id' => '4',
        //     'kategoribuku_id' => '4',
        //     'kode_isbn' => '978-602-5780-12-7',
        //     'judul_buku' => 'Perahu',
        //     'pengarang' => 'Conie Sema',
        //     'image' => '1681005682_7 novel.jpg',
        //     'dokumen' => ''
        // ]);

        // BukuModel::create([
        //     'rakbuku_id' => '4',
        //     'kategoribuku_id' => '4',
        //     'kode_isbn' => '-',
        //     'judul_buku' => 'Pengantar ilmu sejarah, teori filsafat sejarah, sejarah filsafat dan Iptek',
        //     'pengarang' => 'H. Rustam E. Tamburaka',
        //     'image' => '1681005699_8 sejarah'
        // ]);
        // BukuModel::create([
        //     'rakbuku_id' => '4',
        //     'kategoribuku_id' => '4',
        //     'kode_isbn' => '978-979-501-901-5',
        //     'judul_buku' => 'Seni rupa nusantara : pengantar kajian & apresiasi seni',
        //     'pengarang' => 'Aryo Sunaryo',
        //     'image' => '1681005717_9 seni.jpg'
        // ]);
        // BukuModel::create([
        //     'rakbuku_id' => '1',
        //     'kategoribuku_id' => '1',
        //     'kode_isbn' => '978-623-234-052-7',
        //     'judul_buku' => 'Buku saku : seni mengelola usaha UMKM',
        //     'pengarang' => 'Anfas',
        //     'image' => '1681005748_10 umkm.jpg'
        // ]);
       
        // ISI ANGGOTA MODEL
        // AnggotaModel::create([
        //     'nama_anggota' => 'Andrea Lam',
        //     'kontak' => '08123456',
        //     'buku_id' => '4'
        // ]);
        // AnggotaModel::create([
        //     'nama_anggota' => 'Tila Pau',
        //     'kontak' => '08186995',
        //     'buku_id' => '1'
        // ]);
        // AnggotaModel::create([
        //     'nama_anggota' => 'Zakka Lam',
        //     'kontak' => '081657856',
        //     'buku_id' => '5'
        // ]);
        // AnggotaModel::create([
        //     'nama_anggota' => 'Manju Tu',
        //     'kontak' => '05653456',
        //     'buku_id' => '2'
        // ]);
        // AnggotaModel::create([
        //     'nama_anggota' => 'Stera Kum',
        //     'kontak' => '081233456',
        //     'buku_id' => '3'
        // ]);

    }
}
