<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\kecamatan;
use App\Models\desa;
use Illuminate\Support\Carbon;


class AdminController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('admin/home', compact('user'));
    }

    public function admin(){
        $dataarsip = DB::table('data')->paginate();
        $datauser  = DB::table('users')->where('role','user')->paginate();
        $datapinjam  = DB::table('tbl_peminjaman')->paginate();
        $datapengajuan = DB::table('tbl_pengajuan')->where('status','Menunggu')->paginate();
        return view('admin/home',[
            'admin' => $dataarsip,
            'datauser' =>$datauser,
            'datapinjam' =>$datapinjam,
            'datapengajuan' =>$datapengajuan
        ]);
    }   

    public function data(){
        $data = DB::table('data')->orderBy('rak','asc')->paginate(20);
        return view('admin/data',['admin'=>$data]);
    }

    public function input(){
        $kecamatan = kecamatan::all();
        return view('admin/input',['kecamatan'=>$kecamatan]);
    }

    public function getDesa(Request $request){
        $desa = desa::where('desa_kec',$request->kecID)->pluck('desa_kode','desa_nama');
        return response()->json($desa);
    }

    public function simpan(Request $request){
        DB::table('data')->insert([
            'kecamatan'=>$request->kecamatan,
            'kelurahan'=>$request->kelurahan,
            'bukutanah'=>$request->bukutanah,
            'rak'=>$request->rak
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
            'bukutanah'=>$request->bukutanah,
            'rak'=>$request->rak
        ]);

        Alert::success('Sukses!','Data berhasil diupdate');

        return redirect('admin/data');
    }

    public function hapus($id){
        DB::table('data')->where('id',$id)->delete();

        Alert::warning('Hapus!','Data berhasil di Hapus');

        return redirect('admin/data');
    }

    public function cari(Request $request){
        $cari = $request->cari;

        $dataadmin = DB::table('data')
        ->where('kecamatan','like',"%".$cari."%")
        ->orWhere('kelurahan','like',"%".$cari."%")
        ->orWhere('bukutanah','like',"%".$cari."%")
        ->orWhere('rak','like',"%".$cari."%")
        ->paginate(20);
        return view('admin/data',['admin'=>$dataadmin]);
    }

    public function laporan(){
        $laporan = DB::table('data')->get();
        return view('admin/laporan',['laporan'=>$laporan]);
    }

    public function datapinjam(){
        $datapinjam = DB::table('tbl_peminjaman')->paginate(20);
        return view('admin/datapeminjaman',['peminjaman'=>$datapinjam]);
    }

    public function caridata(Request $request){
        $cari = $request->cari;

        $datapinjam = DB::table('tbl_peminjaman')
        ->where('nama','like',"%".$cari."%")
        ->orWhere('no_hak','like',"%".$cari."%")
        ->orWhere('kecamatan','like',"%".$cari."%")
        ->orWhere('kelurahan','like',"%".$cari."%")
        ->orWhere('no_bukutanah','like',"%".$cari."%")
        ->orWhere('koderak','like',"%".$cari."%")
        ->orWhere('tglpeminjaman','like',"%".$cari."%")
        ->orWhere('tglpengembalian','like',"%".$cari."%")
        ->orWhere('status','like',"%".$cari."%")
        ->paginate(25);
        return view('admin/datapeminjaman',['peminjaman'=>$datapinjam]);
    }

    public function pengembalian($id){
        $kembali = DB::table('tbl_peminjaman')->where('id',$id)->first();
        if($kembali->status=="Dipinjam"){
            DB::table('tbl_peminjaman')->where('id',$id)->update([
                'tglpengembalian'=> Carbon::now()->toDateTimeString(),
                'status'=> "Dikembalikan"
            ]);
            Alert::success('Sukses!','Warkah telah dikembalikan');
            return redirect('admin/datapeminjaman');
        }else{
            Alert::warning('Gagal!','Data sudah ada');
            return redirect('admin/datapeminjaman');
        }
    }

    public function datauser(){
        $datauser = DB::table('users')->where('role','user')->paginate(25);
        return view('admin/datauser',['datauser'=>$datauser]);
    }
    
    public function caridatauser(Request $request){
        $cari = $request->cari;

        $datauser = DB::table('users')
        ->where('name','like',"%".$cari."%")
        ->orWhere('email','like',"%".$cari."%")
        ->paginate(10);
        return view('admin/datauser',['datauser'=>$datauser]);
    }

    public function status($id){
        DB::table('tbl_pengajuan')->where('id',$id)->update([
                'status'=>"Dipinjam"
            ]);
        
        $nama = DB::table('tbl_pengajuan')->where('id',$id)->get('nama')->implode('nama');

        $nohak = DB::table('tbl_pengajuan')->where('id',$id)->get('no_hak')->implode('no_hak');

        $kecamatan = DB::table('tbl_pengajuan')->where('id',$id)->get('kecamatan')->implode('kecamatan');
        
        $kelurahan = DB::table('tbl_pengajuan')->where('id',$id)->get('kelurahan')->implode('kelurahan');

        $nobukutanah = DB::table('tbl_pengajuan')->where('id',$id)->get('no_bukutanah')->implode('no_bukutanah');

        $koderak = DB::table('tbl_pengajuan')->where('id',$id)->get('koderak')->implode('koderak');

        DB::table('tbl_peminjaman')->insert([
                'nama'=>$nama,
                'no_hak'=>$nohak,
                'kecamatan'=>$kecamatan,
                'kelurahan'=>$kelurahan,
                'no_bukutanah'=>$nobukutanah,
                'koderak'=>$koderak,
                'tglpeminjaman'=>Carbon::now()->toDateTimeString(),
                'status'=> "Dipinjam"
            ]);
        Alert::success('Sukses!','Warkah Telah Dipinjam');
        return redirect('admin/datapeminjaman');
    }

    public function datapengajuan(){
        $pengajuan=DB::table('tbl_pengajuan')->join('users','users.id','=','tbl_pengajuan.user_id')->where('status','Menunggu')->orderBy('tglpengajuan','desc')->paginate(25);
        return view('admin/datapengajuan',['pengajuan'=>$pengajuan]);
    }

    public function caridatapengajuan(Request $request){
        $cari = $request->cari;

        $datauser = DB::table('tbl_pengajuan')
        ->where('user_id','like',"%".$cari."%")
        ->orWhere('nama','like',"%".$cari."%")
        ->orWhere('no_hak','like',"%".$cari."%")
        ->orWhere('kecamatan','like',"%".$cari."%")
        ->orWhere('kelurahan','like',"%".$cari."%")
        ->orWhere('no_bukutanah','like',"%".$cari."%")
        ->orWhere('koderak','like',"%".$cari."%")
        ->orWhere('tglpengajuan','like',"%".$cari."%")
        ->orWhere('status','like',"%".$cari."%")
        ->orWhere('tujuanpeminjaman','like',"%".$cari."%")
        ->paginate(25);
        return view('admin/datapengajuan',['pengajuan'=>$datauser]);
    }
}
