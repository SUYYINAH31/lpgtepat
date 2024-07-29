<?php

namespace App\Http\Controllers\agen;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Pangkalan;
use Illuminate\Http\Request;

class userController extends Controller
{
    function index(){
        $data['list_pangkalan']= Pangkalan::all();
        $data['list_user'] = User::all();
        return view('agen.user',$data);
    }
    function create(){
        $user = new User;
        $user->email = request('email'); 
        $user->nama = request('nama');
        $user->username = request('username');
        $user->password = bcrypt(request('password'));
        $user->level = request('level');
        $user->status = 0;
        $user->id_pangkalan = request('id_pangkalan');
        $user->save();
        return back()->with('berhasil','data berhasil ditambahkan');
    }
    function edit($id){
        $user = user::find($id);
        $user->email = request('email'); 
        $user->nama = request('nama');
        $user->username = request('username');
        $user->password = bcrypt(request('password'));
        $user->level = request('level');
        $user->status = 0;
        $user->save();
        return back()->with('berhasil','data berhasil ditambahkan');
    }
    function hapus($id){
        user::destroy($id);
        return back()->with('berhasil','data berhasil ditambahkan');
    }
}
