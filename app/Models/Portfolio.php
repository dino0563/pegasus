<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Portfolio extends Model
{
    use HasFactory;

    use Sluggable;

    public function Sluggable():array
    {
        return
            [
                'slug' =>
                [
                    'source' => 'nama'
                ]
            ];
    }

    protected $table = 'portfolio';

    protected $fillable = [
        'nama',
        'gambar',
        'lokasi',
        'kategori',
        'tanggalProyek',
        'client',
        'deskripsi'
 ];
}
