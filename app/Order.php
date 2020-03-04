<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'id_order', 'id_pelanggan', 'tgl_order', 'total', 'bayar', 'kembali', 'status'
    ];
    
    protected $primaryKey = 'id_order';
}
