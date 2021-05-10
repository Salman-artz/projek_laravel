<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangmodel extends Model
{
    protected $table = "peminjam";
    protected $primary = "id";
    public $timestamps = false;

    protected $fillable = [
        'id','nama_peminjam','alamat','tgl_lahir','telp','jk'
    ];
}