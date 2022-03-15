<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Alert;

class UserController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('user.home', compact('user'));
    }

    public function data(){
        $datauser = DB::table('data')->paginate(20);
        return view('user.home',['datauser'=>$datauser]);
    }

    public function cari(Request $request){
        $cari = $request->cari;

        $datauser = DB::table('data')
        ->where('kecamatan','like',"%".$cari."%")
        ->orWhere('kelurahan','like',"%".$cari."%")
        ->orWhere('bukutanah','like',"%".$cari."%")
        ->orWhere('rak','like',"%".$cari."%")
        ->paginate();
        return view('user.home',['datauser'=>$datauser]);
    }

    public function pinjam($id){
        $dt = DB::table('data')->where('id',$id)->get();
        return view ('user/peminjamanwarkah',['pengajuan'=>$dt]);
    }

    public function simpanpinjaman(Request $request){
        DB::table('tbl_pengajuan')->insert([
            'user_id'=>auth()->user()->id,
            'nama'=>$request->nama,
            'no_hak'=>$request->no_hak,
            'kecamatan'=>$request->kecamatan,
            'kelurahan'=>$request->kelurahan,
            'no_bukutanah'=>$request->no_bukutanah,
            'koderak'=>$request->koderak,
            'tglpengajuan'=>Carbon::now()->toDateTimeString(),
            'tujuanpeminjaman'=>$request->tujuanpeminjaman
        ]);

        Alert::success('Sukses!','Peminjaman Warkah berhasil diajukan');
        
        return redirect('user/riwayatpengajuan');
    }

    public function riwayatpinjaman(){
        $riwayat= DB::table('tbl_pengajuan')->where('user_id','=',auth()->user()->id)->orderBy('tglpengajuan','desc')->paginate(25);
        return view('user.riwayatpengajuan',['riwayat'=>$riwayat]);
    }

    public function caririwayat(Request $request){
        $cari = $request->cari;

        $datauser = DB::table('tbl_pengajuan')
        ->where('nama','like',"%".$cari."%")
        ->orWhere('no_hak','like',"%".$cari."%")
        ->orWhere('kelurahan','like',"%".$cari."%")
        ->orWhere('no_bukutanah','like',"%".$cari."%")
        ->orWhere('tglpengajuan','like',"%".$cari."%")
        ->orWhere('tujuanpeminjaman','like',"%".$cari."%")  
        ->paginate(25);
        return view('user.riwayatpengajuan',['riwayat'=>$datauser]);
    }
}
