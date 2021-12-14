<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BajuController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	//$baju = DB::table('baju')->get();
        $baju = DB::table('baju')->paginate(5) ;

    	// mengirim data pegawai ke view index
    	return view('baju.index',['baju' => $baju]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('baju.tambah');
    }

    public function store(Request $request)
    {
        // insert data ke table
        DB::table('baju')->insert([
            'merkbaju' => $request->merk,
            'stockbaju' => $request->stock,
            'tersedia' => $request->status,
        ]);
        // alihkan halaman ke halaman
        return redirect('/baju');
    }

    // method untuk edit data
    public function edit($id)
{
	// mengambil data  berdasarkan id yang dipilih
	$baju = DB::table('baju')->where('kodebaju',$id)->get();
	// passing data  yang didapat ke view edit.blade.php
	return view('baju.edit',['baju' => $baju]);

}

public function view($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$baju = DB::table('baju')->where('kodebaju',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('baju.detail',['baju' => $baju]);

}


    // update data
    public function update(Request $request)
    {
        // update data
        DB::table('baju')->where('kodebaju', $request->id)->update([
            'merkbaju' => $request->merk,
            'stockbaju' => $request->stock,
            'tersedia' => $request->status,
        ]);
        // alihkan halaman ke halaman
        return redirect('/baju');
    }

    // method untuk hapus data
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('baju')->where('kodebaju', $id)->delete();

        // alihkan halaman ke halaman
        return redirect('/baju');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$baju = DB::table('baju')
		->where('merkbaju','like',"%".$cari."%")
        ->orWhere('stockbaju','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('baju.index',['baju' => $baju]);

	}

}
