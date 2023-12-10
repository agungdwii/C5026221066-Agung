<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PenggarisController extends Controller
{
	public function indexpenggaris()
	{
    	// mengambil data dari table penggaris
		// $penggaris = DB::table('penggaris')->get();
        $penggaris = DB::table('penggaris')->paginate(15);

    	// mengirim data penggaris ke view indexpenggaris
		 return view('indexpenggaris',['penggaris' => $penggaris]);


	}

	// method untuk menampilkan view form tambahpenggaris
	public function tambahpenggaris()
	{

		// memanggil view tambahpenggaris
		return view('tambahpenggaris');

	}

	// method untuk insert data ke table penggaris
	public function store(Request $request)
	{
		// insert data ke table penggaris
		DB::table('penggaris')->insert([
			'kodepenggaris' => $request->kodepenggaris,
			'merkpenggaris' => $request->merkpenggaris,
			'stockpenggaris' => $request->stockpenggaris,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman penggaris
		return redirect('/penggaris');

	}

	// method untuk edit data penggaris
	public function editpenggaris($id)
	{
		// mengambil data penggaris berdasarkan id yang dipilih
		$penggaris = DB::table('penggaris')->where('kodepenggaris',$id)->get();
		// passing data penggaris yang didapat ke view editpenggaris.blade.php
		return view('editpenggaris',['penggaris' => $penggaris]);

	}

	// update data penggaris
	public function update(Request $request)
	{
		// update data penggaris
		DB::table('penggaris')->where('kodepenggaris',$request->id)->update([
			'merkpenggaris' => $request->merkpenggaris,
			'stockpenggaris' => $request->stockpenggaris,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman penggaris
		return redirect('/penggaris');
	}

	// method untuk hapus data penggaris
	public function hapus($id)
	{
		// menghapus data penggaris berdasarkan id yang dipilih
		DB::table('penggaris')->where('kodepenggaris',$id)->delete();

		// alihkan halaman ke halaman penggaris
		return redirect('/penggaris');
	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table penggaris sesuai pencarian data
		$penggaris = DB::table('penggaris')
		->where('merkpenggaris','like',"%".$cari."%")
		->paginate();

    		// mengirim data penggaris ke view indexpenggaris
		return view('indexpenggaris',['penggaris' => $penggaris, 'cari'=>$cari]);

	}

    public function viewpenggaris($id){
        // mengambil data penggaris berdasarkan id
        $penggaris = DB::table('penggaris')->where('kodepenggaris', $id)->get();

        return view('viewpenggaris', ['penggaris' => $penggaris]);
    }

}
