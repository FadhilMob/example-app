<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Seeders\DatabaseSeeder;

class KategoriModel extends Model
{
    use HasFactory;
    protected $table = 'kategoribuku';
    protected $fillable = [
        'kategori_buku',
        'total'
    ];
    // protected static function newSeed(): Seeder
    // {
    //     return DatabaseSeeder::new();
    // }
    public function rakbuku()
    {
        return $this->HasOne(RakModel::class, 'kategoribuku_id');
    }
    public function buku()
    {
        return $this->HasMany(BukuModel::class, 'kategoribuku_id');
    }
}
