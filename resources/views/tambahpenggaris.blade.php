@extends('master2')
@section('judulhalaman','Data Penggaris')

@section('konten')

	<h2><a href="https://www.malasngoding.com">CV. Akang Desain Abadi</h2>
	<h3>Data Penggaris</h3>

	<a href="/penggaris"> Kembali</a>

	<br/>
	<br/>

	<form action="/penggaris/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merkpenggaris" class="col-md-2 col-2 col-form-label mr-2">Merk</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="merkpenggaris" name="merkpenggaris">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockpenggaris" class="col-md-2 col-2 col-form-label mr-2">Stock</label>
            <div class="col-xs-9">
            <input type="number" class="form-control" id="stockpenggaris" name="stockpenggaris">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-md-2 col-2 col-form-label mr-2">Tersedia</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="tersedia" name="tersedia">
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
