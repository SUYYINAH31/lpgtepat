<?php

namespace App\Http\Controllers\pangkalan;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use App\Models\Pangkalan;
use App\Models\Stok;
use App\Models\transaksi;
use Illuminate\Http\Request;

class produkController extends Controller
{
    function index(){
        $user = \Auth::user();
        $bulanLalu = date('m') - 1;
        
        $data['stok']=Stok::where('id_pangkalan',$user->Pangkalan->id)->sum('stok');

        $data['stok_bulanLalu']=Stok::where('id_pangkalan',$user->Pangkalan->id)->sum('stok');
        return view('pangkalan.atur_produk',$data);
    }
    function update($id_pangkalan){
        $pangkalan = Pangkalan::find($id_pangkalan);
        $pangkalan->harga_beli = request('beli'); 
        $pangkalan->harga_het = request('het');
        $pangkalan->save();
        return back();
    }
}
