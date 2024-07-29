<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'tb_pelanggan';
    use HasFactory;
    
    function Pangkalan(){
        return $this->belongsTo('App\Models\Pangkalan', 'id_pangkalan');
    }
}
