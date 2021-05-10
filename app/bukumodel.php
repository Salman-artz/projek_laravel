<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangmodel extends Model
{
    protected $table = "buku";
    protected $primary = "id";
    public $timestamps = false;

    protected $fillable = [
        'id','id_kategori','judul','penulis','penerbit','tahun_terbit'
    ];
}