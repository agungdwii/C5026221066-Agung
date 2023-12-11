<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class kategoriController extends Controller
{
	public function indexkategori()
	{
    	// mengambil data dari table kategori
		$kategori = DB::table('kategori')->get();


    	// mengirim data kategori ke view index
		return view('indexkategori',['kategori' => $kategori]);

	}

	public function kirimkategori(Request $request)
	{
		// mengambil data kategori berdasarkan id yang dipilih
		$kategori = DB::table('kategori')->where('id',$request->pilihKategori)->get();
		// passing data kategori yang didapat ke view edit.blade.php
		return view('kirimkategori',['kategori' => $kategori]);

	}
}
