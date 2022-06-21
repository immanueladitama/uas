<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){
        return view('mhs.mhs');
    }
    public function home()
    {
    	return view('mhs.home');
    }

    public function formSKP(){
        $skp = DB::table('suratket')->get();
        return view('mhs.suratketerangan', ['skp' => $skp]);
    }
    public function simpanSKP(Request $request){
        DB::table('suratket')->insert([
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'nim' => $request->nim,
            'lembaga' => $request->lembaga,
            'pimpinan' => $request->pimpinan,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'fax' => $request->fax,
            'status' => 0
        ]);
        return redirect('/layanan/suratketerangan')->with('success','Data Saved');
    }
  
    public function formPraKP(){
        $praKp = DB::table('pengajuan_prakp')->get();
        return view('mhs.praKp', ['praKp' => $praKp]);
    }

    public function simpanPraKP(Request $request){
        DB::table('pengajuan_prakp')->insert([
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'nim' => $request->nim,
            'tools'=>$request->tools,
            'spesifikasi'=>$request->spesifikasi,
            'dokumen'=>$request->dokumen,
            'penguji'=>$request->penguji,
            'ruang'=>$request->ruang,
            'lembaga'=>$request->lembaga,
            'pimpinan'=>$request->pimpinan,
            'alamat'=>$request->alamat,
            'notelp'=>$request->notelp,

            'status' => 0
        ]);
        return redirect('/layanan/praKp')->with('success','Data Saved');
    }
    public function formKP(){
        $kp = DB::table('pengajuan_kp')->get();
        return view('mhs.kp', ['kp' => $kp]);
    }

    public function simpanKP(Request $request){
        DB::table('pengajuan_kp')->insert([
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'judul_kp' => $request->judul_kp,
            'nim' => $request->nim,
            'tools'=>$request->tools,
            'spesifikasi'=>$request->spesifikasi,
            'dokumen'=>$request->dokumen,
            'penguji'=>$request->penguji,
            'ruang'=>$request->ruang,
            'lembaga'=>$request->lembaga,
            'pimpinan'=>$request->pimpinan,
            'alamat'=>$request->alamat,
            'notelp'=>$request->notelp,
            'jadwal_ujian' => '1111-11-11',
            'status' => 0
        ]);
        return redirect('/layanan/kp')->with('success','Data Saved');
    }


}