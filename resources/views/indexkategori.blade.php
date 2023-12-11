@extends('master2')
@section('judulHalaman', 'Pilih Kategori')


@section('konten')
	<h3>Pilih Kategori</h3>
	<br/>

    <form action="/combo/kirimkategori" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="pilihKategori">Example select</label>
            <select class="form-control" id="pilihKategori" name="pilihKategori">
                @foreach ($kategori as $p)
                    <option value="{{$p->ID}}">{{$p->Nama}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Kirim" class="btn btn-primary mt-2">

    </form>


    @endsection
