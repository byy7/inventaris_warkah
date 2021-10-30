<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Alert;

class AdminController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('admin.home', compact('user'));
    }

    public function admin(){
        
        $dataadmin = DB::table('data')->paginate(5);
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

        Alert::success('Sukses!','Data berhasil disimpan');

        return redirect('admin');
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

        Alert::success('Sukses!','Data berhasil diupdate');

        return redirect('admin');
    }

    public function hapus($id){
        DB::table('data')->where('id',$id)->delete();

        Alert::warning('Hapus!','Data berhasil di Hapus');

        return redirect('admin');
    }

    public function cari(Request $request){
        $cari = $request->cari;

        $dataadmin = DB::table('data')
        ->where('kecamatan','like',"%".$cari."%")
        ->orWhere('kelurahan','like',"%".$cari."%")
        ->orWhere('album','like',"%".$cari."%")
        ->orWhere('rak','like',"%".$cari."%")
        ->orWhere('tanggal','like',"%".$cari."%")
        ->paginate();
        return view('admin.home',['admin'=>$dataadmin]);
    }

}
