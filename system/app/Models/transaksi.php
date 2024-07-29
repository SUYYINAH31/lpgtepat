<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi';
    use HasFactory;
    function Pangkalan(){
        return $this->belongsTo('App\Models\Pangkalan', 'id_pangkalan');
    }
    function Pelanggan(){
        return $this->belongsTo('App\Models\Pelanggan', 'id_pelanggan');
    }
}
