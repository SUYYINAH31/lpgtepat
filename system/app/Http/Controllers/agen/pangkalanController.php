<?php

namespace App\Http\Controllers\agen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Stok;
use App\Models\transaksi;
use App\Models\Pangkalan;


class pangkalanController extends Controller
{
    function index(){
        $data['list_pangkalan'] = Pangkalan::all();
        return view('agen.pangkalan',$data);
    }
    function create(){
        $pangkalan = new Pangkalan;
        $pangkalan->no_registrasi = request('no_registrasi');
        $pangkalan->nama_pangkalan = request('nama_pangkalan');
        $pangkalan->nama_pemilik = request('nama_pemilik');
        $pangkalan->no_ktp = request('no_ktp');
        $pangkalan->no_handphone = request('no_handphone');
        $pangkalan->propinsi = request('propinsi');
        $pangkalan->kabupaten_kota = request('kabupaten_kota');
        $pangkalan->kecamatan = request('kecamatan');
        $pangkalan->kelurahan = request('kelurahan');
        $pangkalan->kode_pos = request('kode_pos');
        $pangkalan->alamat = request('alamat');
        $pangkalan->save();
        return back()->with('berhasil', 'data berhasil ditambahkan');
    }
    function edit($id){
        $pangkalan = Pangkalan::find($id);
        $pangkalan->nama_pangkalan = request('nama_pangkalan');
        $pangkalan->nama_pemilik = request('nama_pemilik');
        $pangkalan->no_ktp = request('no_ktp');
        $pangkalan->no_handphone = request('no_handphone');
        $pangkalan->propinsi = request('propinsi');
        $pangkalan->kabupaten_kota = request('kabupaten_kota');
        $pangkalan->kecamatan = request('kecamatan');
        $pangkalan->kelurahan = request('kelurahan');
        $pangkalan->kode_pos = request('kode_pos');
        $pangkalan->alamat = request('alamat');
        $pangkalan->save();
        return back()->with('berhasil', 'data berhasil ditambahkan');
    }
    function delete($id){
        Pangkalan::destroy($id);
        return back()->with('berhasil', 'data berhasil ditambahkan');
    }
    function laporan($id){
        $list_laporan = $data['list_laporan'] = transaksi::where('id_pangkalan',$id)->whereMonth('tanggal',request('bulan'))->groupBy('id_pelanggan')->get();
        foreach($list_laporan as $laporan){
            $laporan->total = transaksi::whereMonth('tanggal',request('bulan'))->where('id_pangkalan',$id)->sum('jumlah');
        }
        return view('agen.laporan',$data);
    }
}
