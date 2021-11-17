<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function index()
    {
        //DB::table('')->get() ; //mengembalikan array of Object, tidak diakses dengan [][]
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();

    	// mengirim data pegawai ke view index
    	return view('pegawai.index',['pegawai' => $pegawai]); //passing value bisa lebih dr 1

    }

    // method untuk menampilkan view form tambah pegawai
public function tambah()
{

	// memanggil view tambah
	return view('pegawai.tambah');

}

// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('pegawai')->insert([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai'); //sama kayak yg di web return ke redirect, view beda lagi

}

}
