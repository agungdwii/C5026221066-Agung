@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')
    <div>
        <h2><a href="https://www.malasngoding.com">CV. Akang Desain Abadi</a></h2>
        <h3>View Pegawai</h3>

        <a href="/pegawai"> Kembali</a>
    </div>
    <div class="row mt-4">
        <div class="col-6 border border-primary">
        </div>

        <div class="col-6">

            @foreach ($pegawai as $p)
                <div class="row mb-3">
                    <div class="col-4">
                        <strong>Nama</strong>
                    </div>
                    <div class="col-8">
                        : {{ $p->pegawai_nama }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <strong>Jabatan</strong>
                    </div>
                    <div class="col-8">
                        : {{ $p->pegawai_jabatan }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <strong>Umur</strong>
                    </div>
                    <div class="col-8">
                        : {{ $p->pegawai_umur }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <strong>Alamat</strong>
                    </div>
                    <div class="col-8">
                        : {{ $p->pegawai_alamat }}
                    </div>
                </div>
            @endforeach

            <div class="text-center mt-4">
                <a href="/pegawai" class="btn btn-primary btn-block" style="max-width: 30%; margin: 0 auto;">Ok</a>
            </div>
        </div>
    </div>

@endsection
