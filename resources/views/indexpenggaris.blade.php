@extends('master2')
@section('judulhalaman','Data Penggaris')

@section('konten')
	<h2>CV. Akang Desain Abadi</h2>
	<h3>Data Penggaris</h3>

	<a href="/penggaris/tambahpenggaris" class="btn btn-primary"> + Tambah Penggaris Baru</a>

	<br/>
    <p>Cari Data Penggaris :</p>

	<form action="/penggaris/cari" method="GET" class="mb-3">
        <div class="input-group">
            <input class="form-control" type="text" name="cari" placeholder="Cari Penggaris .."
                value="{{ old('cari', isset($cari) ? $cari : '') }}">
            <div class="input-group-append">
                <button type="submit" class="btn btn-info">CARI</button>
            </div>
        </div>
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($penggaris as $p)
		<tr>
			<td>{{ $p->kodepenggaris }}</td>
			<td>{{ $p->merkpenggaris }}</td>
			<td>{{ $p->stockpenggaris }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
                <a href="/penggaris/viewpenggaris/{{ $p->kodepenggaris }}" class="btn btn-success">View</a>
				|
				<a href="/penggaris/editpenggaris/{{ $p->kodepenggaris }}" class="btn btn-warning">Edit</a>
				|
				<a href="/penggaris/hapus/{{ $p->kodepenggaris }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$penggaris->links() }}

@endsection
