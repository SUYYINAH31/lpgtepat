<?php

namespace App\Http\Controllers\pangkalan;

use App\Http\Controllers\Controller;
use App\Models\transaksi;
use App\Models\Pangkalan;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    function index(){
        $user = \Auth::user();
        $pangkalan = Pangkalan::where('id',$user->Pangkalan->id)->first();
        $transaksi = $data['list_transaksi'] = transaksi::where('tanggal',date('Y-m-d'))->get();
        
        $terjual = $data['terjual'] = $transaksi->sum('jumlah');
        $penjualan = $data['penjualan'] = $terjual * $pangkalan->harga_het;
        $modal = $data['modal'] = $terjual * $pangkalan->harga_beli;
        $data['keuntungan'] = $penjualan - $modal;
        
        return view('pangkalan.laporan',$data);
    }
    function cari(){
        $user = \Auth::user();
        $pangkalan = Pangkalan::where('id',$user->Pangkalan->id)->first();
        $from = request('from');
        $to = request('to');
        $transaksi = $data['list_transaksi'] = transaksi::whereBetween('tanggal',[$from,$to])->get();
        
        $terjual = $data['terjual'] = $transaksi->sum('jumlah');
        $penjualan = $data['penjualan'] = $terjual * $pangkalan->harga_het;
        $modal = $data['modal'] = $terjual * $pangkalan->harga_beli;
        $data['keuntungan'] = $penjualan - $modal;
        
        return view('pangkalan.laporan',$data);
    }
}
