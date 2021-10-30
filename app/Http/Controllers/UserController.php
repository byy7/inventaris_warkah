<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Alert;

class UserController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('user.home', compact('user'));
    }

    public function data(){
        $datauser = DB::table('data')->paginate(5);
        return view('user.home',['datauser'=>$datauser]);
    }

    public function cari(Request $request){
        $cari = $request->cari;

        $datauser = DB::table('data')
        ->where('kecamatan','like',"%".$cari."%")
        ->orWhere('kelurahan','like',"%".$cari."%")
        ->orWhere('album','like',"%".$cari."%")
        ->orWhere('rak','like',"%".$cari."%")
        ->orWhere('tanggal','like',"%".$cari."%")
        ->paginate();
        return view('user.home',['datauser'=>$datauser]);
    }
}
