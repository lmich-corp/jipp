<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;

use App\Proposal;

use App\Penghargaan;

use App\Penerapan;

use App\Admin;

use App\Inovator;

use App\User;

use Exception;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontpage.index');
    }

    public function profil()
    {
        return view('frontpage.profil');
    }

    public function etalase()
    {
        $locationsPeta=[];
        $i=0;
        $nav=[];
        $profil=Inovator::with(['proposal'=>function ($quesry){
                   $quesry->where('status',"1"); 
                }])->get();
        foreach ($profil as $p) {
            if ($p->proposal->first()["status"]==1){
                if ($p->proposal->first()["latitude"] !='' && $p->proposal->first()["longitude"] !=''){
                    $locationsPeta[$i]["abstrak"]=$p->proposal->first()["ringkasan"];
                    $locationsPeta[$i]["kategori"]=$p->proposal->first()["kategori"];
                    $locationsPeta[$i]["id"]=$p->id;
                    $locationsPeta[$i]["latitude"]=$p->proposal->first()["latitude"];
                    $locationsPeta[$i]["longitude"]=$p->proposal->first()["longitude"];
                    $locationsPeta[$i]["judul"]=$p->proposal->first()->judul;
                    $i++;
                }
            }
        }
        return view('frontpage.etalase')->with(['locationsPeta'=>$locationsPeta,'navbar'=>$nav,]);
    }

    public function ideinovasi()
    {
        return view('frontpage.ide_inovasi');
    }

    public function warta()
    {
        return view('frontpage.warta');
    }

    public function regulasi()
    {
        return view('frontpage.referensi');
    }
    public function agendakab()
    {
        return view('frontpage.kota-kabupaten');
    }
    public function agendaprov()
    {
        return view('frontpage.provinsi');
    }
    public function agendanas()
    {
        return view('frontpage.nasional');
    }
    public function referensi()
    {
        return view('frontpage.referensi');
    }
    

}
