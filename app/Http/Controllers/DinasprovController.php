<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\Dinasprov;

use App\Inovator;

use App\Proposal;

use App\Penerapan;

use App\Penghargaan;

use App\User;

use validator;

class DinasprovController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dinasprov.index');
    }

     public function profildinasprov()
    {
        $opd = Auth::user()->id;
        $id = $opd;
        $profil = Dinasprov::where('user_id', $id)->first();
        return view('dinasprov.profil', compact('profil'));
    }

    public function profilupdate(Request $request, $id)
    {
        $profil = Dinasprov::where('id', $id)->first();
        $profil->nama=$request->input('nama');
        $profil->nik=$request->input('nik');
        $profil->nip=$request->input('nip');
        $profil->jabatan=$request->input('jabatan');
        $profil->lembaga=$request->input('lembaga');
        $profil->alamat=$request->input('alamat');
        $profil->no_telp=$request->input('no_telp');
        $profil->update();

        return redirect('profildinasprov');
    }

    // data inovator
    public function dinasprovinovator_prov()
    {
        $inovator=Auth::user()->dinasprov;
       

        return view('dinasprov.inovator.index', compact('inovator'));
    }

    public function createinovator_prov()
    {
        return view('dinasprov.inovator.create');
    }

    public function storeinovator_prov(Request $request)
    {
        $user = new User();
        $profil = new Inovator();

        $profil->nama=$request->input('nama');
        $profil->dinasprov_id=Auth::user()->dinasprov->id;
        $profil->dinsakab_id=null;
        $user->username=$request->input('username');
        $user->password=bcrypt($request->input('password'));
        $user->email=$request->input('email');
        $user->role="inovator";
        
        $user->save();
        
        $profil->user_id=$user->id;
        $profil->save();

        $proposal=new Proposal();
        $proposal->inovator_id=$profil->id;        
        $proposal->save();

        $Penghargaan=new Penghargaan();
        $Penghargaan->inovator_id=$profil->id;        
        $Penghargaan->save();

        $Penerapan=new Penerapan();
        $Penerapan->inovator_id=$profil->id;        
        $Penerapan->save();

        return redirect ('dinasprovinovator')->with('success','Tersimpan');
    }

    public function dinasprovproposal()
    {
        $dinasprov=Auth::user()->dinasprov;

        $proposal=$dinasprov->inovator->first();

        $penghargaan=$proposal->penghargaan;

        $penerapan=$proposal->penerapan;

        return view('dinasprov.proposal.index',compact('proposal', 'penghargaan', 'penerapan'));
    }

    public function detailpenerapan($id)
    {

        $penerapan = Penerapan::where('id', $id)->first();
        return view('dinasprov.proposal.penerapan',compact('penerapan'));
    }

    public function detailpenghargaan($id)
    {

        $penghargaan = Penghargaan::where('id', $id)->first();
        return view('dinasprov.proposal.penghargaan',compact('penghargaan'));
    }

    public function detailproposal($id)
    {

        $proposal = Proposal::where('id', $id)->first();
        return view('dinasprov.proposal.lihatproposal',compact('proposal'));
    }

    public function passworddinasprov()
    {
        return view('dinasprov.password');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
