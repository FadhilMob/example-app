<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaModel extends Model
{
    use HasFactory;
    protected $table = 'anggota';
    protected $fillable = [
        // 'buku_id',
        'nama_anggota',
        'kontak',
    ];
    // protected static function newSeed(): Seeder
    // {
    //     return DatabaseSeeder::new();
    // }
    // public function buku()
    // {
    //     return $this->belongsTo(BukuModel::class, 'buku_id');
    // }

}
