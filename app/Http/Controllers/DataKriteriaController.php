<?php

namespace App\Http\Controllers;
use App\Models\dataKriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DataKriteriaController extends Controller
{
   
   public function __construct()
   {
       $this->middleware('auth');
   }


   public function index()
    {
         $dataKriteria = DataKriteria::all();
        return view('datakriteria.index', compact('data_kriteria'));
    }


    public function create()
    {
        return view('datakriteria.add');
    }


    public function store(Request $request)
    {
        $data =$request->all();
        // dd($data);
        $kriteria = kriteria::create($data);

       return redirect()->route('kriteria')->with('status','Data Berhasil Ditambahkan');
    }

}
