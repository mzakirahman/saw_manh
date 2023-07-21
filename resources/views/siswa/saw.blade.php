@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Data Hasil Rekomendasi Peminatan Siswa') }}</h1>


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
                            <a class="btn btn-success" href="{{ route('hasil.export') }}" style="font-weight: bold; margin-bottom:10px;"> Export <i class="fa fa-print"></i></a>
                        </div>
                        <div class="" style="overflow-x: auto">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                    
                                        <th>Nama</th>
                                        <th>Hasil</th>
                                        <th>Peminatan</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    @foreach($saw as $item)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->hasil }}</td>
                                        <td>
                                            @if($item->hasil > 0.80)
                                                MIPA
                                            @else
                                            IPS
                                            @endif

                                        </td>
                                    </tr>   
                                    @endforeach
                                </tbody>
                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection