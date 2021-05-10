<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangmodel extends Model
{
    protected $table = "kategori_buku";
    protected $primary = "id_buku";
    public $timestamps = false;

    protected $fillable = [
        'id_buku','kategori_buku'
    ];}