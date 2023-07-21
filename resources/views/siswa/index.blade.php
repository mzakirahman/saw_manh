@php
    use App\Models\Siswa;
@endphp

@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Data Siswa') }}</h1>

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
                        <div class="text-xs font-weight-bold text-gold text-uppercase mb-1">Data Siswa</div>
                        <!-- <div class="text-xs font-weight-bold text-gold mb-1">
                            <a class="btn btn-info" href="{{ route('lihatSaw') }}" style="font-weight: bold; margin-bottom:10px;"> Hitung <i class="fa fa-print"></i></a>
                        </div> -->

                        <div class="text-xs font-weight-bold text-gold mb-1">
                        @if (Siswa::count() >= 2)
                                                    <a class="btn btn-info" href="{{ route('lihatSaw') }}" style="font-weight: bold; margin-bottom:10px;"> Hitung <i class="fa fa-print"></i></a>
                        @else
                        <a class="btn btn-info disabled" href="{{ route('lihatSaw') }}" style="font-weight: bold; margin-bottom:10px;"> Hitung <i class="fa fa-print"></i></a>
                        @endif
                        </div>
                                            
                        <div class="" style="overflow-x: auto">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <!-- <th>ID Siswa</th> -->
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Asal Sekolah</th>
                                        <th>Nilai IPA</th>
                                        <th>Nilai IPS</th>
                                        <th>Nilai MTK</th>
                                        <th>Nilai B.Inggris</th>
                                        <th>Nilai B.Indo</th>
                                        <th>Nilai PPKN</th>
                                        <th>Action</th>
                                        
                                    </tr>
                               
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <!-- <td>{{ $item->idSiswa }}</td> -->
                                        <td>{{ $item->nisn }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->asalSekolah }}</td>
                                        <td>{{ $item->nilaiIPA }}</td>
                                        <td>{{ $item->nilaiIPS }}</td>
                                        <td>{{ $item->nilaiMTK }}</td>
                                        <td>{{ $item->nilaiBING }}</td>
                                        <td>{{ $item->nilaiBINDO }}</td>
                                        <td>{{ $item->nilaiPPKN }}</td>
                                       
                                        <td>
                                            <form action="{{ route('siswa.destroy', $item->idSiswa) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button style="margin: 2px" class="btn btn-sm btn-danger" title="Delete">
                                                    <i class="fa fa-trash" title="Delete"></i>
                                                </button>
                                            </form>
                                        </td>


                                    </tr>
                                    @empty
                                    <tr>
                                        <th class="text-center" colspan="9">Tidak Ada Data</th>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $data->links() }}
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection