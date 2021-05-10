<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangmodel extends Model
{
    protected $table = "transaksi_pinjam";
    protected $primary = "id";
    public $timestamps = false;

    protected $fillable = [
        'id','id_peminjam','tgl_pinjam'
    ];
}