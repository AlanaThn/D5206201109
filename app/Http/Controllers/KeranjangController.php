<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
    	$keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data ke view index
    	return view('keranjangbelanja.index',['keranjangbelanja' => $keranjangbelanja]);

    }

    public function tambah()
{

	// memanggil view tambah
	return view('keranjangbelanja.tambah');

}

    public function store(Request $request)
{
	// insert data ke table
	DB::table('keranjangbelanja')->insert([
		'KodeBarang' => $request->kode,
		'Jumlah' => $request->jumlah,
		'Harga' => $request->harga
	]);
	// alihkan halaman ke halaman
	return redirect('/keranjangbelanja');

}

public function hapus($id)
{
	// menghapus data  berdasarkan id yang dipilih
	DB::table('keranjangbelanja')->where('ID',$id)->delete();

	// alihkan halaman ke halaman
	return redirect('/keranjangbelanja');
}

}
