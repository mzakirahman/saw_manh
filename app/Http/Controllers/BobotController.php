<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BobotController extends Controller
{
    public function index()
    {
        $bobot = Bobot::all();
        $kriteria = Kriteria::all();
        return view("bobot.index", compact('bobot', 'kriteria'));
    }

    public function create()
    {
        $bobot=Bobot::all();
        $kriteria=Kriteria::all();
        return view ("bobot.create", compact('bobot', 'kriteria'));
    }

    public function store(Request $request)
    {
        $data = new Bobot();
        $data->id_kriteria = $request->kriteria;
        $data->value = $request->value;
        $data->save();
        return redirect('bobot')->with('insertes', 'Data Berhasil Ditambahkan');
    }

    public function show(Bobot $bobot)
    {
        //
    }

    public function edit(Request $request, $id)
    {
        $data = Bobot::find($id);
        $kriteria = Kriteria::all();
        return view("Bobot.edit", compact('data', 'kriteria'));
    }
}
