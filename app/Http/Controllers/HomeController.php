<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\bobot;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        // $dataSiswa = Siswa::distinct() -> take (5) -> get();
        // $dataSiswa = Siswa::distinct()-> get();
        $dataSiswa = DB::table('siswas')->orderBy('created_at','desc')->paginate(10);
        $users = User::count();

        $widget = [
            'users' => $users,
            //...
        ];
if($dataSiswa->count() > 0) {
        $bobot= bobot::all()->first();
        $hasilNormalisasi=(new SawController)->preferensiTerbaik();
        $data = array();
        
        foreach($hasilNormalisasi as $item){
            array_push($data,(object)[
                'nama'=>$item->nama,
                'hasil'=>($item->k1*$bobot->c1)+($item->k2*$bobot->c2)+($item->k3*$bobot->c3)+($item->k4*$bobot->c4)+($item->k5*$bobot->c5)+($item->k6*$bobot->c6)
            ]);
        }
        $temporaryIpa=array();
        $temporaryIps=array();
        foreach($data as $item){
            if ($item->hasil>0.80){
                array_push($temporaryIpa,$item->hasil);
            }
            else{
                array_push($temporaryIps,$item->hasil);
            }
        }
        $jumlahdata=[
            'totalseluruh'=>count($data),
            'totalipa'=>count($data) == 1 ? 0 : count($temporaryIpa),
            'totalips'=>count($data) == 1 ? 0 :  count($temporaryIps),
        ];
            } else {
            $jumlahdata=[
                        'totalseluruh'=>0,
                        'totalipa'=>0,
                        'totalips'=>0,
                    ];
            }

        return view('home')->with([
           'dataSiswa' => $dataSiswa, 
           'widget' => $widget,
           'jumlahdata' =>$jumlahdata
           
        ]);
    }
}





//     public function index()
//     {
//         // $dataSiswa = Siswa::distinct() -> take (5) -> get();
//         // $dataSiswa = Siswa::distinct()-> get();
//         $dataSiswa = DB::table('siswas')->orderBy('created_at','desc')->paginate(10);
//         $users = User::count();

//         $widget = [
//             'users' => $users,
//             //...
//         ];

//         $bobot= bobot::all()->first();
//         $hasilNormalisasi=(new SawController)->preferensiTerbaik();
//         $data = array();
        
//         foreach($hasilNormalisasi as $item){
//             array_push($data,(object)[
//                 'nama'=>$item->nama,
//                 'hasil'=>($item->k1*$bobot->c1)+($item->k2*$bobot->c2)+($item->k3*$bobot->c3)+($item->k4*$bobot->c4)+($item->k5*$bobot->c5)+($item->k6*$bobot->c6)
//             ]);
//         }
//         $temporaryIpa=array();
//         $temporaryIps=array();
//         foreach($data as $item){
//             if ($item->hasil>0.80){
//                 array_push($temporaryIpa,$item->hasil);
//             }
//             else{
//                 array_push($temporaryIps,$item->hasil);
//             }
//         }
//         $jumlahdata=[
//             'totalseluruh'=>count($data),
//             'totalipa'=>count($temporaryIpa),
//             'totalips'=>count($temporaryIps),
//         ];

//         return view('home')->with([
//            'dataSiswa' => $dataSiswa, 
//            'widget' => $widget,
//            'jumlahdata' =>$jumlahdata
           
//         ]);
//     }
// }
