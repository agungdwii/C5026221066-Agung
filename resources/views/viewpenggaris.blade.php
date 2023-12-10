@extends('master2')
@section('judulhalaman', 'Data Penggaris')

@section('konten')
    <div>
        <h2><a href="https://www.malasngoding.com">CV. Akang Desain Abadi</a></h2>
        <h3>View Data Penggaris</h3>
        <a href="/penggaris"> Kembali</a>
    </div>

    <div class="row mt-4">
        <div class="col-6 border border-primary">

        </div>
        <div class="col-6">
            @foreach ($penggaris as $p)
                <div class="row mb-3">
                    <div class="col-4">
                        <strong>Merk</strong>
                    </div>
                    <div class="col-8">
                        : {{ $p->merkpenggaris }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <strong>Stock</strong>
                    </div>
                    <div class="col-8">
                        : {{ $p->stockpenggaris }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <strong>Tersedia</strong>
                    </div>
                    <div class="col-8">
                        : {{ $p->tersedia }}
                    </div>
                </div>

            @endforeach

            <div class="text-center mt-4">
                <a href="/penggaris" class="btn btn-primary btn-block" style="max-width: 30%; margin: 0 auto;">Ok</a>
            </div>
        </div>
    </div>
@endsection
