<html>

<head>
    <style>
        /** 
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
        @page {
            margin: 0cm 0cm;
        }

        /** Define now the real margins of every page in the PDF **/
        body {
            margin-top: 2cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
            font-family: 'Times New Roman', Times, serif;
            font-variant: normal;
        }

        /** Define the header rules **/
        header,
        footer,
        {
        text-align: center;
        border-bottom: 3px solid #000;
        margin: 80px;
        padding-top: 50px;
        }

        main {
            margin: 80px;
        }

        .header {
            top: 0px;
        }

        .footer {
            bottom: 0px;
        }

        .pagenum:before {
            content: counter(page);
        }
    
        </style>
</head>



<body>
    <header>
        <div style=”text-align:center;width:100%; border:1px solid #000099; padding:8px;”>
            <img src="{{ public_path('img/1.jpeg') }}" style="float:left; max-width:80px; margin-top:18px;" /><br>
            <span style="font-size: 20px; font-weight:bold;">KEMENTERIAN AGAMA<span> <br>
                    <span style="font-size: 16px; font-weight:bold;">MADRASAH ALIYAH NURUL HIDAYAH SUNGAI APIT<span><br>
                            <span style="font-size: 14px; font-weight:bold;">TERAKREDITASI A NSM : 13121408002 NPSN :
                                10498878<span><br>
                                    <span style="font-size: 9px; font-weight:bold;"> Jl. Jend. Sudirman Sungai Apit Kab.
                                        Siak Prov. Riau Email : nurulhidayahma673@gmail.com KP 28762<span>
        </div>
    </header>
    <main>
        <div class="title" style="text-align: center; margin-bottom: 20px;">
            <div class="h3" style="font-weight: bold"> Data Siswa Dan Hasil Rekomendasi Peminatan Siswa</div>
        </div>

                        <div class="table-data">
                            <table class="table table-bordered" border="1" width="600">
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
                                    @foreach($siswa as $item)
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
    </main>
</body>

</html>

