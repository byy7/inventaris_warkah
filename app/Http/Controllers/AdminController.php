<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('admin.home', compact('user'));
    }

    public function admin(){
        $dataadmin = DB::table('data')->get();
        return view('admin.home',['admin'=>$dataadmin]);
    }

    public function input(){
        return view('admin/input');
    }

    public function simpan(Request $request){
        DB::table('data')->insert([
            'kecamatan'=>$request->kecamatan,
            'kelurahan'=>$request->kelurahan,
            'album'=>$request->album,
            'rak'=>$request->rak,
            'tanggal'=>$request->tanggal
        ]);
        return redirect('admin')->with('message','Berhasil Menambahkan Data!');
    }

    public function edit($id){
        $dt = DB::table('data')->where('id',$id)->get();
        return view ('admin/edit',['edit'=>$dt]);
    }

    public function update(Request $request){
        DB::table('data')->where('id',$request->id)->update([
            'kecamatan'=>$request->kecamatan,
            'kelurahan'=>$request->kelurahan,
            'album'=>$request->album,
            'rak'=>$request->rak,
            'tanggal'=>$request->tanggal
        ]);
        return redirect('admin')->with('message','Berhasil Mengupdate Data!');
    }

    public function hapus($id){
        DB::table('data')->where('id',$id)->delete();

        return redirect('admin')->with('message','Berhasil Mengupdate Data!');
    }
}
