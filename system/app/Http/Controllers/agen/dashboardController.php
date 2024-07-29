<?php

namespace App\Http\Controllers\agen;

use App\Http\Controllers\Controller;
use App\Models\Pangkalan;
use App\Models\Pelanggan;
use App\Models\Stok;
use App\Models\transaksi;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    function index(){
        $data['pangkalan'] = Pangkalan::count();
        $data['pelanggan'] = Pelanggan::count();
        $stok = Stok::sum('stok');
        $data['transaksi'] = $transaksi =  transaksi::sum('jumlah');
        $data['stok_agen'] = $stok+$transaksi;

        $list_stok = $data['list_stok'] = Stok::groupBy('bulan')->get();
        foreach($list_stok as $stok){
            $stok_awal = Stok::where('bulan',$stok->bulan)->sum('stok');
            $stok_trs = $stok->tersalur = transaksi::whereMonth('tanggal',$stok->bulan)->sum('jumlah');
            $stok->sum =$stok_awal + $stok_trs;
        }
        

        return view('agen.index',$data);
    }
}
