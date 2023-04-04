<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Seeders\DatabaseSeeder;

class RakModel extends Model
{
    use HasFactory;
    protected $table = 'rakbuku';
    protected $fillable = [
        'kategoribuku_id',
        'nama_rak',
        'nomor_rak',
    ];
    // protected static function newSeed(): Seeder
    // {
    //     return DatabaseSeeder::new();
    // }
    public function kategoribuku()
    {
        return $this->belongsTo(KategoriModel::class, 'kategoribuku_id');
    }
}
