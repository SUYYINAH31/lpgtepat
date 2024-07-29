<?php

namespace App\Http\Controllers\pangkalan;

use App\Http\Controllers\Controller;
use App\Models\Pangkalan;
use App\Models\Pelanggan;
use App\Models\Stok;
use App\Models\transaksi;
use Illuminate\Http\Request;

class cekNikController extends Controller
{
    function index()
    {
        return view('pangkalan.index2');
    }
   
    function cek_nik()
    {
        $user = \Auth::user();
        $cek = Pelanggan::where('no_ktp', request('keyword'))->count();
        $data['pelanggan'] = Pelanggan::where('no_ktp', request('keyword'))->first();
        $data['data_stok'] = Stok::where('id_pangkalan', $user->Pangkalan->id)->first();
        $data['stok'] = Stok::where('id_pangkalan', $user->Pangkalan->id)->sum('stok');

        $nik = request('keyword');
        if ($cek > 0) {
            return view('pangkalan.sale', $data);
        } else {
            return back()->with('tidak', $nik);
        }
    }
    
    function proses_tansaksi()
    {

        $transaksi = new transaksi;
        $transaksi->kode_transaksi = 'TRS/LPG-' . request('id_pangkalan') . '/' . date('m') . '/' . date('Y');
        $transaksi->id_pangkalan = request('id_pangkalan');
        $transaksi->id_pelanggan = request('id_pelanggan');
        $transaksi->tahap = request('tahap');
        $transaksi->harga = request('harga');
        $transaksi->jumlah = request('jumlah');
        $transaksi->save();
        $stok = Stok::find(request('id_stok'));
        $stok->stok = $stok->stok - request('jumlah');
        $stok->save();
        $id = $transaksi->id;
        $data = transaksi::where('id', $id)->first();
        return redirect('struk')->with([
            'success' => 'Transaksi Berhasil',
            'kasir' => $data->Pangkalan->nama_pemilik,
            'waktu' => $data->created_at,
            'alamat' => $data->Pangkalan->alamat,
            'kode' => $data->kode_transaksi,
            'pelanggan' => $data->Pelanggan->nama,
            'pelanggan_kk' => $data->Pelanggan->no_kk,
            'pelanggan_ktp' => $data->Pelanggan->no_ktp,
            'pelanggan_pengguna' => $data->Pelanggan->jenis_pengguna,
            'harga' => $data->harga,
            'qty' => $data->jumlah
        ]);
    }

    function struk()
    {
        return view('pangkalan.struk');
    }
    function cek_nik_lanjutan()
    {
        $data['nik'] = request('nik');
        return view('pangkalan.nik_lanjutan', $data);
    }
    function input_pelanggan()
    {
        $user = \Auth::user();
        $pelanggan = new Pelanggan;
        $pelanggan->id_pangkalan = $user->id;
        $pelanggan->nama = request('nama');
        $pelanggan->no_ktp = request('nik');
        $pelanggan->no_kk = request('no_kk');
        $pelanggan->jenis_pengguna = request('jenis_pengguna');
        $pelanggan->email = request('email');
        $pelanggan->no_hp = request('no_telp');
        $pelanggan->propinsi = request('propinsi');
        $pelanggan->kabupaten = request('kabupaten');
        $pelanggan->kecamatan = request('kecamatan');
        $pelanggan->kelurahan = request('kelurahan');
        $pelanggan->alamat = request('alamat');
        $pelanggan->foto_ktp = "belom lah ye";
        $pelanggan->save();

        return redirect('/')->with('input_success', 'Data Berhasil Ditambahkan Lakukan Transaksi Berdasarkan Nik Yang Telah Terdaftar');
    }

    function register()
    {
        return view('pangkalan.newpelanggan');
    }
    function cek_register()
    {
        $cek = Pelanggan::where('no_ktp', request('keyword'))->count();
        $data = Pelanggan::where('no_ktp', request('keyword'))->first();
        if ($cek > 0) {
            return back()->with(
                ['ada' => 'Pelanggan Sudah Terdaftar',
                 'id_pelanggan' => $data->id,
                'nama_pelanggan' => $data->nama,
                'nik_pelanggan' => $data->no_ktp,
                'jenis_pengguna' => $data->jenis_pengguna,
                'pangkalan' => $data->Pangkalan->nama_pangkalan
                ]);
        } else {
            return back()->with('tidak',  request('keyword'));
        }
    }
  
}
// catatan belum
// belum mendeteksi pelanggan terdeteksi di pangkalan mana
// jika pelanggan terdaftar di pangkalan lain tidak boleh mengambil di pangkalan yang bersangkutan
// jika memang terdaftar di wajibkan untuk mangambil di pangkalan tersebut
// terimakasih