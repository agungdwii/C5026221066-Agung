@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')
	<h2><a href="https://www.malasngoding.com">CV. Akang Desain Abadi</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai">Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="nama" class="col-md-2 col-2 col-form-label mr-2">Nama</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-md-2 col-2 col-form-label mr-2">Jabatan</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-md-2 col-2 col-form-label mr-2">Umur</label>
            <div class="col-xs-9">
            <input type="number" class="form-control" id="umur" name="umur">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-md-2 col-2 col-form-label mr-2">Alamat</label>
            <div class="col-xs-9">
            <textarea class="form-control" name="alamat" id="alamat" cols="22" rows="5"></textarea>
            </div>
        </div>

		<div class="form-group row">
            <label for="submit" class="col-md-2 col-2 col-form-label mr-2"></label>
            <div class="col-xs-9">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
	</form>

@endsection
