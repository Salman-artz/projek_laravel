<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangmodel extends Model
{
    protected $table = "detail_transaksi";
    protected $primary = "id";
    public $timestamps = false;

    protected $fillable = [
        'id','id_transaksi','id_buku'
    ];
}