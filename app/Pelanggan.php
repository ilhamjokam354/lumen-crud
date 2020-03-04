<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    //
    protected $fillable = [
        'id_pelanggan', 'pelanggan', 'alamat', 'telp', 'email', 'password', 'aktif'
    ];

    protected $primaryKey = 'id_pelanggan';
}

