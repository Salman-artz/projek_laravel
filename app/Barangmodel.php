<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangmodel extends Model
{
    protected $table = "barang";
    protected $primary = "id_barang";
    public $timestamps = false;

    protected $fillable = [
        'id_barang','nama_barang','harga_barang'
    ];
}
