@extends('master2')
@section('judulhalaman','Nilai Kuliah')

@section('konten')
    <h2>Nilai Kuliah Mahasiswa Sistem Informasi ITS</h2>

	<a href="/nilaikuliah">Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store2" method="post">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="NRP" class="col-md-2 col-2 col-form-label mr-2">NRP</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="NRP" name="NRP">
            </div>
        </div>

        <div class="form-group row">
            <label for="NilaiAngka" class="col-md-2 col-2 col-form-label mr-2">Nilai Angka</label>
            <div class="col-xs-9">
            <input type="number" class="form-control" id="NilaiAngka" name="NilaiAngka">
            </div>
        </div>

        <div class="form-group row">
            <label for="SKS" class="col-md-2 col-2 col-form-label mr-2">SKS</label>
            <div class="col-xs-9">
            <input type="number" class="form-control" id="SKS" name="SKS">
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
