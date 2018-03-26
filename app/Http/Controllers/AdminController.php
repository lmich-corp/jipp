<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Admin;

use App\Inovator;

use App\Proposal;

use App\User;

use Auth;

use Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function profiladmin()
    {
        $inovator = Auth::user()->id;
        $id = $inovator;
        $profil = Admin::where('user_id', $id)->first();
        return view('admin.profil', compact('profil'));
    }

    public function profilupdate(Request $request, $id)
    {
        $profil = Admin::where('id', $id)->first();
        $profil->nama=$request->input('nama');
        $profil->nik=$request->input('nik');
        $profil->nip=$request->input('nip');
        $profil->jabatan=$request->input('jabatan');
        $profil->lembaga=$request->input('lembaga');
        $profil->alamat=$request->input('alamat');
        $profil->no_telp=$request->input('no_telp');
        $profil->update();

        return redirect('profiladmin');
    }

    // data inovator
    public function admininovator()
    {
        $inovator=Auth::user()->admin;
       

        return view('admin.inovator.index', compact('inovator'));
    }

    public function createinovator()
    {
        return view('admin.inovator.create');
    }

    public function storeinovator(Request $request)
    {
        $user = new User();
        $profil = new Inovator();

        $profil->nama=$request->input('nama');
        $profil->admin_id=Auth::user()->admin->id;
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
        return redirect ('admininovator')->with('success','Tersimpan');
    }

    public function adminproposal()
    {
        $admin=Auth::user()->admin;

        $proposal=$admin->inovator->first();

        return view('admin.proposal.index',compact('proposal'));
    }

    public function passwordadmin()
    {
        return view('admin.password');
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
