<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\KriteriaRating;
use App\Models\kriterias;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Mpdf\Tag\SetHtmlPageHeader;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::orderBy('created_at', 'desc')->paginate(5);
        return view('siswa.index')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nisn' => 'required|max:10|min:10',
        ]);
        $dataSiswa = $request->all();

        Siswa::create($dataSiswa);



        return redirect(route('lihatDataSiswa'))->withError($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Siswa::findOrFail($id);
        $item->delete();

        return redirect()->route('siswa.index');
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

    // public function export()
    // {
    //     $data = Siswa::all();
    //     // share data to view
    //     $pdf = PDF::loadview('pdf',['siswa'=>$data]);
    // 	return $pdf->download('data-siswa-pdf.pdf');
    // }
}
