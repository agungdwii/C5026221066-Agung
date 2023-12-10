@extends('master2')
@section('judulhalaman','Edit Penggaris')

@section('konten')
  <h2><a href="https://www.malasngoding.com">CV. Akang Desain Abadi</a></h2>
  <h3>Edit Data Penggaris</h3>

  <a href="/penggaris"> Kembali</a>

  <br/>
  <br/>

  @foreach($penggaris as $p)
  <form action="/penggaris/update" method="post">
    {{ csrf_field() }}

    <input type="hidden" name="id" value="{{ $p->kodepenggaris }}"> <br/>
    <div class="form-group row">
        <label for="merkpenggaris" class="col-md-2 col-2 col-form-label mr-2">Merk</label>
        <div class="col-xs-9">
            <input type="text" required="required" class="form-control" name="merkpenggaris" value="{{ $p->merkpenggaris }}">
        </div>
    </div>

    <div class="form-group row">
        <label for="stockpenggaris" class="col-md-2 col-2 col-form-label mr-2">Stock</label>
        <div class="col-xs-9">
            <input type="number" required="required" class="form-control" name="stockpenggaris" value="{{ $p->stockpenggaris }}">
        </div>
    </div>

    <div class="form-group row">
        <label for="tersedia" class="col-md-2 col-2 col-form-label mr-2">Tersedia</label>
        <div class="col-xs-9">
            <input type="text" required="required" class="form-control" name="tersedia" value="{{ $p->tersedia }}">
        </div>
    </div>

    <div class="form-group row">
        <label for="submit" class="col-md-2 col-2 col-form-label mr-2"></label>
        <div class="col-xs-9">
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </div>
    </div>
  </form>
  @endforeach

@endsection
