@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard') }}</h1>

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



    

<!-- KATA-KATA BERJALAN -->
    <marquee behavior="alternate" bgcolor ="#90EE90"><H3>WELCOME TO WEBSITE REKOMENDASI PEMINATAN SISWA  </H3></marquee>

<!-- carousel
<img src="{{ url('img/spk') }}" style="max-width: 50px; margin-left:35px;" alt=""> -->
<img src="img/spk.webp" class="rounded mx-auto d-block" alt="..." width="500px" height="500px">
<br><br><br>


<!-- total -->
<div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <div class="row">
                <div class="col-sm-8 col-lg-4">
                        <div class="card border-end ">
                            <div class="card-body text-center card bg-warning">
                                <div class="d-flex align-items-center">
                                    <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-database-check" viewBox="0 0 16 16">
                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514Z"/>
                                        <path d="M12.096 6.223A4.92 4.92 0 0 0 13 5.698V7c0 .289-.213.654-.753 1.007a4.493 4.493 0 0 1 1.753.25V4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.525 4.525 0 0 1-.813-.927C8.5 14.992 8.252 15 8 15c-1.464 0-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13h.027a4.552 4.552 0 0 1 0-1H8c-1.464 0-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10c.262 0 .52-.008.774-.024a4.525 4.525 0 0 1 1.102-1.132C9.298 8.944 8.666 9 8 9c-1.464 0-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777ZM3 4c0-.374.356-.875 1.318-1.313C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4Z"/>
                                    </svg>
                                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                                class="set-doller "></sup>{{$jumlahdata['totalseluruh']}}</h2>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Rekomendasi Peminatan Siswa
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-lg-4">
                        <div class="card border-end ">
                            <div class="card-body text-center card bg-success">
                                <div class="d-flex align-items-center">
                                    <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-globe-asia-australia" viewBox="0 0 16 16">
                                        <path d="m10.495 6.92 1.278-.619a.483.483 0 0 0 .126-.782c-.252-.244-.682-.139-.932.107-.23.226-.513.373-.816.53l-.102.054c-.338.178-.264.626.1.736a.476.476 0 0 0 .346-.027ZM7.741 9.808V9.78a.413.413 0 1 1 .783.183l-.22.443a.602.602 0 0 1-.12.167l-.193.185a.36.36 0 1 1-.5-.516l.112-.108a.453.453 0 0 0 .138-.326ZM5.672 12.5l.482.233A.386.386 0 1 0 6.32 12h-.416a.702.702 0 0 1-.419-.139l-.277-.206a.302.302 0 1 0-.298.52l.761.325Z"/>
                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM1.612 10.867l.756-1.288a1 1 0 0 1 1.545-.225l1.074 1.005a.986.986 0 0 0 1.36-.011l.038-.037a.882.882 0 0 0 .26-.755c-.075-.548.37-1.033.92-1.099.728-.086 1.587-.324 1.728-.957.086-.386-.114-.83-.361-1.2-.207-.312 0-.8.374-.8.123 0 .24-.055.318-.15l.393-.474c.196-.237.491-.368.797-.403.554-.064 1.407-.277 1.583-.973.098-.391-.192-.634-.484-.88-.254-.212-.51-.426-.515-.741a6.998 6.998 0 0 1 3.425 7.692 1.015 1.015 0 0 0-.087-.063l-.316-.204a1 1 0 0 0-.977-.06l-.169.082a1 1 0 0 1-.741.051l-1.021-.329A1 1 0 0 0 11.205 9h-.165a1 1 0 0 0-.945.674l-.172.499a1 1 0 0 1-.404.514l-.802.518a1 1 0 0 0-.458.84v.455a1 1 0 0 0 1 1h.257a1 1 0 0 1 .542.16l.762.49a.998.998 0 0 0 .283.126 7.001 7.001 0 0 1-9.49-3.409Z"/>
                                    </svg>
                                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                                class="set-doller "></sup>{{$jumlahdata['totalipa']}}</h2>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Rekomendasi Peminatan MIPA
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-lg-4">
                        <div class="card border-end ">
                            <div class="card-body text-center card bg-info">
                                <div class="d-flex align-items-center">
                                    <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                                    </svg>
                                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                                class="set-doller "></sup>{{$jumlahdata['totalips']}}</h2>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Rekomendasi Peminatan IPS
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    <script src="public/assets/libs/raphael/raphael.min.js"></script>
    <script src="public/assets/libs/morris.js/morris.min.js"></script>
    <script src="public/dist/js/pages/morris/morris-data.js"></script>


    <!-- @if (session('hasils'))
    <div class="alert alert-success">
        Rekomendasi Peminatan {{ session('hasils') }}
    </div>
@endif



    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-gold text-uppercase mb-1">Data Siswa Terbaru</div>                            
                            <div class="" style="overflow-x: auto">
                                <table class="table" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NISN</th>
                                            <th>Nama</th>
                                            <th>Asal Sekolah</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 ?>
                                        @forelse ($dataSiswa as $item)
                                            <tr>
                                                
                                            <td>{{ $i++ }}</td>
                                                <td>{{ $item->nisn }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->asalSekolah }}</td> -->
                                                
                                            <!-- </tr>
                                        @empty
                                        <tr>
                                            <th class="text-center" colspan="9">Database Kosong</th>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{ $dataSiswa->links() }} -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
