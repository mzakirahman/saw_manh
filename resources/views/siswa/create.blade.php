@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Input Kriteria') }}</h1>

@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
<div class="alert alert-success border-left-success" role="alert">
    {{ session('status') }}
</div>
@endif


<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-gold text-uppercase mb-3">Tambah Data Kriteria & Data Siswa</div>
                        <form action="{{ route('siswa.store') }}" method="post">
                            @csrf

                            <div class="row">
                                

                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="nama" class="form-control-label">Nama</label>
                                        <input type="text" name="nama" id="nama" value="{{ old('nama')}}" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="nisn" class="form-control-label">NISN</label>
                                        <input type="number" min="10" name="nisn" id="nisn" value="{{ old('nisn')}}" class="form-control" required >
                    @error('nisn')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                                    </div>

                                    <!-- <div class="form-group">
                                        <label for="nisn" class="form-control-label">NISN</label>
                                        <input type="number" name="nisn" id="nisn" value="{{ old('nisn')}}" class="form-control" min="0" required>
                                    </div> -->

                                    <div class="form-group">
                                        <label for="asalSekolah" class="form-control-label">Asal Sekolah</label>
                                        <input type="text" name="asalSekolah" id="asalSekolah" value="{{ old('asalSekolah')}}" class="form-control" required>
                                    </div>

                                    <div class="form-group col-md-4 p-0">
                                        <button class="btn btn-gold btn-block">Submit</button>
                                    </div>


                                </div>

                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="nilaiIPA" class="form-control-label">Nilai IPA Terpadu</label>
                                        <input type="number" max="100" min="0" name="nilaiIPA" id="nilaiIPA" value="{{ old('nilaiIPA')}}" class="form-control" required>
                                    </div>

                                    <div class="form-group pt-1">
                                        <label for="nilaiIPS" class="form-control-label">Nilai IPS Terpadu</label>
                                        <input type="number" max="100" min="0" name="nilaiIPS" id="nilaiIPS" value="{{ old('nilaiIPS')}}" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="nilaiMTK" class="form-control-label">Nilai Matematika</label>
                                        <input type="number" max="100" min="0" name="nilaiMTK" id="nilaiMTK" value="{{ old('nilaiMTK')}}" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="nilaiBING" class="form-control-label">Nilai Bahasa Inggris</label>
                                        <input type="number" max="100" min="0" name="nilaiBING" id="nilaiBING" value="{{ old('nilaiBING')}}" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="nilaiBINDO" class="form-control-label">Nilai Bahasa Indonesia</label>
                                        <input type="number" max="100" min="0" name="nilaiBINDO" id="nilaiBINDO" value="{{ old('nilaiBINDO')}}" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="nilaiPPKN" class="form-control-label">Nilai PPKN</label>
                                        <input type="number" max="100" min="0" name="nilaiPPKN" id="nilaiPPKN" value="{{ old('nilaiPPKN')}}" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script>
@endsection