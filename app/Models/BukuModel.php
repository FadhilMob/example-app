<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuModel extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = [
        'rakbuku_id',
        'kategoribuku_id',
        'kode_isbn',
        'judul_buku',
        'pengarang'
        
    ];
    // protected static function newSeed(): Seeder
    // {
    //     return DatabaseSeeder::new();
    // }
    public function anggota()
    {
        return $this->HasOne(AnggotaModel::class, 'buku_id');
    }
    public function kategoribuku()
    {
        return $this->belongsTo(KategoriModel::class, 'kategoribuku_id');
    }
    public function rakbuku()
    {
        return $this->belongsTo(RakModel::class, 'rakbuku_id');
    }
}
