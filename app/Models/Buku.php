<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun terbit',
    ];

    public function kategoribukurelasi()
    {
        return $this->hasMany(Kategoribukurelasi::class, 'buku_id');
    }
    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'kategoribukurelas', 'buku_id', 'kategori_id');
    }
}
