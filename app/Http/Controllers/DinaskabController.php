<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DinaskabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dinaskab.index');
    }

     public function profildinaskab()
    {
        $inovator = Auth::user()->id;
        $id = $inovator;
        $profil = Dinaskab::where('user_id', $id)->first();
        return view('dinaskab.profil', compact('profil'));
    }

    public function profilupdate(Request $request, $id)
    {
        $profil = dinaskab::where('id', $id)->first();
        $profil->nama=$request->input('nama');
        $profil->nik=$request->input('nik');
        $profil->nip=$request->input('nip');
        $profil->jabatan=$request->input('jabatan');
        $profil->lembaga=$request->input('lembaga');
        $profil->alamat=$request->input('alamat');
        $profil->no_telp=$request->input('no_telp');
        $profil->update();

        return redirect('profildinaskab');
    }

    // data inovator
    public function dinaskabinovator()
    {
        $inovator=Auth::user()->dinaskab;
       

        return view('dinaskab.inovator.index', compact('inovator'));
    }

    public function createinovator()
    {
        return view('dinaskab.inovator.create');
    }

    public function storeinovator(Request $request)
    {
        $user = new User();
        $profil = new Inovator();

        $profil->nama=$request->input('nama');
        $profil->dinaskab_id=Auth::user()->dinaskab->id;
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
        return redirect ('dinaskabinovator')->with('success','Tersimpan');
    }

    public function dinaskabproposal()
    {
        $dinaskab=Auth::user()->dinaskab;

        $proposal=$dinaskab->inovator->first();

        return view('dinaskab.proposal.index',compact('proposal'));
    }

    public function passworddinaskab()
    {
        return view('dinaskab.password');
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
