<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Proposal;

use App\Penghargaan;

use App\Penerapan;

use App\Admin;

use App\Inovator;

use App\User;

use Auth;

use Validator;


class InovatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inovator.index');
    }

    public function profil()
    {
        $inovator = Auth::user()->id;
        $id = $inovator;
        $profil = Inovator::where('user_id', $id)->first();
        return view('inovator.profil', compact('profil'));
    }

    public function profilupdate(Request $request, $id)
    {
        $profil = Inovator::where('id', $id)->first();
        $profil->nama=$request->input('nama');
        $profil->nik=$request->input('nik');
        $profil->nip=$request->input('nip');
        $profil->jabatan=$request->input('jabatan');
        $profil->lembaga=$request->input('lembaga');
        $profil->alamat=$request->input('alamat');
        $profil->no_telp=$request->input('no_telp');
        $profil->update();

        return redirect('inovatorprofil');
    }

    public function proposal()
    {

        $inovator = Auth::user()->inovator->id;
        $id = $inovator;
        $proposal = Proposal::where('inovator_id', $id)->first();
        return view('inovator.proposal.proposal',compact('proposal'));
    }


    public function proposalupdate(Request $request, $id)
    {
        
        

    }

    public function penerapan()
    {

        $inovator = Auth::user()->inovator->id;
        $id = $inovator;
        $penerapan = Penerapan::where('inovator_id', $id)->first();
        return view('inovator.proposal.penerapan',compact('penerapan'));
    }
    


    public function penerapanupdate(Request $request, $id)
    {
        $penrapan = Penerapan::where('id', $id)->first();
        $penrapan->lokasi=$request->input('lokasi');
        $penrapan->hasil=$request->input('hasil');
        $penrapan->video=$request->input('video');

        $nama = Auth::User()->username;
        $file  = $request->file('foto');
        $nameonly=preg_replace('/\..+$/', '', $file->getClientOriginalName());
        $extension = $file->getClientOriginalExtension();
        $fileName   = $nameonly.'_'.$nama.'.'.$extension;
        $request->file('foto')->move("proposal/", $fileName);

        $penrapan->foto = $fileName;

        $penrapan->update();

        return redirect('inovatorproposal')->with('success','Tersimpan');

    }

    public function penghargaan()
    {

        $inovator = Auth::user()->inovator->id;
        $id = $inovator;
        $penghargaan = Penghargaan::where('inovator_id', $id)->first();
        return view('inovator.proposal.penghargaan',compact('penghargaan'));
    }


    public function penghargaanupdate(Request $request, $id)
    {
        $penghargaan = Penghargaan::where('id', $id)->first();
        $penghargaan->nama=$request->input('nama');
        $penghargaan->tahun=$request->input('tahun');
        $penghargaan->sifat=$request->input('sifat');
        $penghargaan->keterangan=$request->input('keterangan');

        $nama = Auth::User()->username;
        $file  = $request->file('foto');
        $nameonly=preg_replace('/\..+$/', '', $file->getClientOriginalName());
        $extension = $file->getClientOriginalExtension();
        $fileName   = $nameonly.'_'.$nama.'.'.$extension;
        $request->file('foto')->move("proposal/", $fileName);

        $penghargaan->foto = $fileName;

        $file1  = $request->file('foto1');
        $nameonly1=preg_replace('/\..+$/', '', $file1->getClientOriginalName());
        $extension1 = $file1->getClientOriginalExtension();
        $fileName1   = $nameonly.'_'.$nama.'.'.$extension1;
        $request->file('foto1')->move("proposal/", $fileName1);

        $penghargaan->foto1 = $fileName1;

        $file2  = $request->file('foto2');
        $nameonly2=preg_replace('/\..+$/', '', $file2->getClientOriginalName());
        $extension2 = $file2->getClientOriginalExtension();
        $fileName2   = $nameonly2.'_'.$nama.'.'.$extension2;
        $request->file('foto2')->move("proposal/", $fileName2);

        $penghargaan->foto = $fileName2;

        $penghargaan->update();

        

        return redirect('inovatorproposal')->with('success','Tersimpan');
        

    }

    public function gantipassword()
    {
        return view('inovator.password');
    }

    public function storepassword(Request $request)
    {
        if ($request->input('password_baru')==$request->input('password_konfirmasi')){
            $user=Auth::user();
            if (\Hash::check($request->input('password_lama'), $user->password)){
                $user->password=bcrypt($request->input('password_baru'));
                if($user->save()){
                    return redirect('inovator')->with('success','Tersimpan');
                }
            }
            else{
                return redirect('/passwordinovator')->with('error','Gagal Menyimpan Periksa Kembali Password Anda');
            }    
        }
        else{
     
            return redirect('/passwordinovator')->with('error','Gagal Menyimpan Periksa Kembali Password Anda');
        }
    }

    // public function storepassword(Request $request){
    //     if ($request->input('password')==$request->input('confirm_password')){
    //         $user=Auth::user();
    //         if (\Hash::check($request->input('password_lama'), $user->password)){
    //             $user->password=bcrypt($request->input('password'));
    //             if($user->save()){
    //                 return redirect('superadmin')->with('success','Tersimpan');
    //             }
    //         }else{
    //             return redirect('superadmin/resetpassword')->with('error','Gagal Menyimpan Periksa Kembali Password Anda');
    //         }
            
    //     }else{
    //         return redirect('superadmin/resetpassword')->with('error','Gagal Menyimpan Periksa Kembali Password Anda');
    //     }
    // }

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
