<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nik',
        'email',
        'pekerjaan',
        'masalah',
        'sketsa_lokasi',
        'dokumen_kelurahan',
        'longitude',
        'latitude',
    ];

    protected $table = 'posts'; // Nama tabel yang sesuai dalam database

    // Metode untuk mengambil data latitude dan longitude
    public static function getCoordinates()
    {
        return self::select('latitude', 'longitude')->get();
    }

    public static function getTotalData()
    {
        return self::count();
    }

    public function getSafeNamaAttribute()
    {
        return htmlspecialchars($this->nama, ENT_QUOTES, 'UTF-8');
    }

    public function getSafePekerjaanAttribute()
    {
        return htmlspecialchars($this->pekerjaan, ENT_QUOTES, 'UTF-8');
    }

    // Metode untuk mendapatkan masalah yang aman
    public function getSafeMasalahAttribute()
    {
        return htmlspecialchars($this->masalah, ENT_QUOTES, 'UTF-8');
    }
    
}
