<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\bobot;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Mpdf\Tag\SetHtmlPageHeader;

class SawController extends Controller
{
    
    public function hitungsaw(){
        $bobot= bobot::all()->first();
        $hasilNormalisasi=$this->preferensiTerbaik();
        $data['saw']=array();
        
        foreach($hasilNormalisasi as $item){
            array_push($data['saw'],(object)[
                'nama'=>$item->nama,
                'hasil'=>($item->k1*$bobot->c1)+($item->k2*$bobot->c2)+($item->k3*$bobot->c3)+($item->k4*$bobot->c4)+($item->k5*$bobot->c5)+($item->k6*$bobot->c6)
            ]);
        }

        return view('siswa/saw',$data);
        // dd($item);
        
    }

    // public function export()
    // {
    //     $mpdf = new \Mpdf\Mpdf();
    //     $mpdf->SetHTMLHeader('

    //     <div style="border-bottom:3px solid #000;">
    //         <img src="{{ URL::asset("/img/1.jpeg") }}" style="float:left;">
    //         <div style="text-align:center;font-size:20px;font-weight:bold;">KEMENTERIAN AGAMA</div>
    //         <div style="text-align:center;font-size:16px;font-weight:bold;">MADRASAH ALIYAH NURUL HIDAYAH SUNGAI APIT</div>
    //         <div style="text-align:center;font-size:14px;font-weight:bold;">TERAKREDITASI A  NSM : 13121408002  NPSN : 10498878</div>
    //         <div style="text-align:center;font-size:9px;font-weight:bold;">Jl. Jend. Sudirman Sungai Apit Kab. Siak Prov. Riau Email : nurulhidayahma673@gmail.com KP 28762</div>
    //     </div>

    //     ');
    //     $mpdf->WriteHTML('');
    //     $mpdf->Output();
    // }

    public function export()
    {
        $bobot= bobot::all()->first();
        $hasilNormalisasi=$this->preferensiTerbaik();
        $data = array();
        
        foreach($hasilNormalisasi as $item){
            array_push($data,(object)[
                'nama'=>$item->nama,
                'hasil'=>($item->k1*$bobot->c1)+($item->k2*$bobot->c2)+($item->k3*$bobot->c3)+($item->k4*$bobot->c4)+($item->k5*$bobot->c5)+($item->k6*$bobot->c6)
            ]);
        }
        // share data to view
        $pdf = PDF::loadview('pdf',['siswa'=>$data]);
    	return $pdf->download('data-siswa-pdf.pdf');
    }

    // public function export(){
    //     //mengambil data dan tampilan dari halaman laporan_pdf
    //     //data di bawah ini bisa kalian ganti nantinya dengan data dari database
    //     $data = PDF::loadview('pdf', ['data' => 'ini adalah contoh laporan PDF']);
    //     //mendownload laporan.pdf
    // 	return $data->download('laporan.pdf');
    // }

    public function nilaikeputusan(){
        $siswa=Siswa::all();
        $nilaikeputusan=array();

        foreach($siswa as $item){
            if ($item->nilaiIPA >= 92) {
                $item->nilaiIPA = 5;
            } elseif ($item->nilaiIPA < 92 && $item->nilaiIPA > 82) {
                $item->nilaiIPA = 4;
            } elseif ($item->nilaiIPA < 83 && $item->nilaiIPA > 74) {
                $item->nilaiIPA = 3;
            } elseif ($item->nilaiIPA < 75 && $item->nilaiIPA > 49) {
                $item->nilaiIPA = 2;
            } elseif ($item->nilaiIPA < 50) {
                $item->nilaiIPA = 1;
            }

            if ($item->nilaiIPS >= 92) {
                $item->nilaiIPS = 5;
            } elseif ($item->nilaiIPS < 92 && $item->nilaiIPS > 82) {
                $item->nilaiIPS = 4;
            } elseif ($item->nilaiIPS < 83 && $item->nilaiIPS > 74) {
                $item->nilaiIPS = 3;
            } elseif ($item->nilaiIPS < 75 && $item->nilaiIPS > 49) {
                $item->nilaiIPS = 2;
            } elseif ($item->nilaiIPS < 50) {
                $item->nilaiIPS = 1; 
            }

            if ($item->nilaiMTK >= 92) {
                $item->nilaiMTK = 5;
            } elseif ($item->nilaiMTK < 92 && $item->nilaiMTK > 82) {
                $item->nilaiMTK = 4;
            } elseif ($item->nilaiMTK < 83 && $item->nilaiMTK > 74) {
                $item->nilaiMTK = 3;
            } elseif ($item->nilaiMTK < 75 && $item->nilaiMTK > 49) {
                $item->nilaiMTK = 2;
            } elseif ($item->nilaiMTK < 50) {
                $item->nilaiMTK = 1;
            }

            if ($item->nilaiBING >= 92) {
                $item->nilaiBING = 5;
            } elseif ($item->nilaiBING < 92 && $item->nilaiBING > 82) {
                $item->nilaiBING = 4;
            } elseif ($item->nilaiBING < 83 && $item->nilaiBING > 74) {
                $item->nilaiBING = 3;
            } elseif ($item->nilaiBING < 75 && $item->nilaiBING > 49) {
                $item->nilaiBING = 2;
            } elseif ($item->nilaiBING < 50) {
                $item->nilaiBING = 1;
            } 

            if ($item->nilaiBINDO >= 92) {
                $item->nilaiBINDO = 5;
            } elseif ($item->nilaiBINDO < 92 && $item->nilaiBINDO > 82) {
                $item->nilaiBINDO = 4;
            } elseif ($item->nilaiBINDO < 83 && $item->nilaiBINDO > 74) {
                $item->nilaiBINDO = 3;
            } elseif ($item->nilaiBINDO < 75 && $item->nilaiBINDO > 49) {
                $item->nilaiBINDO = 2;
            } elseif ($item->nilaiBINDO < 50) {
                $item->nilaiBINDO = 1;
            } 

            if ($item->nilaiPPKN >= 92) {
                $item->nilaiPPKN = 5;
            } elseif ($item->nilaiPPKN < 92 && $item->nilaiPPKN > 82) {
                $item->nilaiPPKN = 4;
            } elseif ($item->nilaiPPKN < 83 && $item->nilaiPPKN > 74) {
                $item->nilaiPPKN = 3;
            } elseif ($item->nilaiPPKN < 75 && $item->nilaiPPKN > 49) {
                $item->nilaiPPKN = 2;
            } elseif ($item->nilaiPPKN < 50) {
                $item->nilaiPPKN = 1;
            }
    
                array_push($nilaikeputusan,(object) 
                [
                    'nama'=>$item->nama,
                    'Kriteria1'=>$item->nilaiIPA,
                    'Kriteria2'=>$item->nilaiIPS,
                    'Kriteria3'=>$item->nilaiMTK,
                    'Kriteria4'=>$item->nilaiBING,
                    'Kriteria5'=>$item->nilaiBINDO,
                    'Kriteria6'=>$item->nilaiPPKN, 
                ]);

        }
                return $nilaikeputusan;
    }

    public function nilaimax(){
        $nilaikeputusan=$this->nilaikeputusan();
        $tempkriteria1=array();
        $tempkriteria2=array();
        $tempkriteria3=array();
        $tempkriteria4=array();
        $tempkriteria5=array();
        $tempkriteria6=array();

        foreach($nilaikeputusan as $n){
            array_push($tempkriteria1,$n->Kriteria1);
            array_push($tempkriteria2,$n->Kriteria2);
            array_push($tempkriteria3,$n->Kriteria3);
            array_push($tempkriteria4,$n->Kriteria4);
            array_push($tempkriteria5,$n->Kriteria5);
            array_push($tempkriteria6,$n->Kriteria6);
        }

        $nilaimax=(object)[
            'maxkriteria1'=>max($tempkriteria1),
            'maxkriteria2'=>max($tempkriteria2),
            'maxkriteria3'=>max($tempkriteria3),
            'maxkriteria4'=>max($tempkriteria4),
            'maxkriteria5'=>max($tempkriteria5),
            'maxkriteria6'=>max($tempkriteria6),
        ];

        return $nilaimax;


    }

    public function preferensiTerbaik(){
        $matrixkeputusan=$this->nilaikeputusan();
        $nilaimax=$this->nilaimax();
        $nilaiPreferensiTerbaik=array();
    foreach($matrixkeputusan as $item){
            array_push($nilaiPreferensiTerbaik, (object)[
                    'nama'=>$item->nama,
                    'k1'=>$item->Kriteria1/$nilaimax->maxkriteria1,
                    'k2'=>$item->Kriteria2/$nilaimax->maxkriteria2,
                    'k3'=>$item->Kriteria3/$nilaimax->maxkriteria3,
                    'k4'=>$item->Kriteria4/$nilaimax->maxkriteria4,
                    'k5'=>$item->Kriteria5/$nilaimax->maxkriteria5,
                    'k6'=>$item->Kriteria6/$nilaimax->maxkriteria6
            ]);

    }

    return $nilaiPreferensiTerbaik;
    }

}
