@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Edit Room') }}</h1>

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
                        <div class="text-xs font-weight-bold text-gold text-uppercase mb-3">Edit Data Ruangan</div>
                        <form action="{{ route('ruangan.update', $item->idRuangan) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="row">
                                

                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-control-label">Nama Ruangan</label>
                                        <input type="text" name="namaRuangan" id="namaRuangan" value="{{ old('namaRuangan', $item->namaRuangan)}}" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="jenisRuangan" class="form-control-label">Jenis Ruangan</label>
                                        <input type="text" name="jenisRuangan" id="jenisRuangan" value="{{ old('jenisRuangan',$item->jenisRuangan)}}" class="form-control" required>
                                    </div>

                                    
                                    <div class="form-group pt-1">
                                        <label for="kapasitasRuangan" class="form-control-label">Kapasitas Ruangan</label>
                                        <input type="text" name="kapasitasRuangan" id="kapasitasRuangan" value="{{ old('kapasitasRuangan',$item->kapasitasRuangan)}}" class="form-control" required>
                                    </div>



                                </div>

                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="lokasiRuangan" class="form-control-label">Lokasi Ruangan</label>
                                        <input class="form-control" type="text" name="lokasiRuangan" value="{{ old('lokasiRuangan', $item->lokasiRuangan)}}" id="lokasiRuangan" required>
                                    </div>

                                    <div class="form-group pt-1">
                                        <label for="gambar" class="form-control-label">Gambar Ruangan</label>
                                        <input type="file" name="gambar" id="gambar" value="{{ old('gambar')}}" class="form-control" required>
                                        <label for="">Tipe file : png/jpg/jpeg dan max 500kb.</label>
                                        @if($errors->any())
                                            <label style="color: red;">{{$errors->first()}}</label>
                                        @endif
                                    </div>


                                    {{-- <div class="form-group">
                                        <label for="waktuSelesai" class="form-control-label">Waktu Selesai</label>
                                        <select name="waktuSelesai" id="waktuSelesai" class="form-control">
                                            @foreach ($waktus as $idWaktu)
                                                <option value="{{ $waktu->idWaktu }}">{{ $waktu->waktu }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="form-group">
                                        <button class="btn btn-gold btn-block">Submit</button>
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