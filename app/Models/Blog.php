<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model
{
    use HasFactory;

    use Sluggable;

    public function Sluggable():array
    {
        return
            [
                'slug' =>
                [
                    'source' => 'judul'
                ]
            ];
    }

    protected $table = 'blogs';

    protected $fillable = [
        'judul',
        'gambar',
        'penulis',
        'tanggal',
        'kategori',
        'deskripsi'
    ];
}
