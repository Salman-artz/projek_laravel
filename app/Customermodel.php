<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customermodel extends Model
{
    protected $table = "customer";
    protected $primarykey = "id";
    public $timestamps = false;

    protected $fillable = [
        'id','id_barang','nama','jumlah','total'
    ];
}
