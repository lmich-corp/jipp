<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Superadmin;

use App\Materi;

use App\Regulasi;

use App\Ebook;

use App\Admin;

use App\Inovator;

use App\Proposal;

use App\Profil;

use App\Role;

use App\Permission;

use App\Warta;

use App\Kontakkami;

use App\Ideinovasi;

use App\Agenda;

use App\User; 

use App\Dinasprov;

use App\Dinaskab;

use Auth;

use Validator;


class SuperadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superadmin.index');
    }

    // ebook
    public function ebook()
    {
        $ebook = Ebook::orderBy('id', 'desc')->get();
        return view('superadmin.ebook.index', compact('ebook'));
    }

    public function createebook()
    {
        return view('superadmin.ebook.create');
    }

    public function storeebook(Request $request)
    {
        $superadmin=Auth::User()->superadmin;

        $ebook = new Ebook();

        $ebook->superadmin_id = $superadmin->id;
        // $pengantarkota->jabatan = $request->input ('nama_surat');
        // $pengantarkota->nama = $request->input ('nama_surat');
        $nama = Auth::User()->username;
        $file  = $request->file('nama_file');
        $nameonly=preg_replace('/\..+$/', '', $file->getClientOriginalName());
        $extension = $file->getClientOriginalExtension();
        $fileName   = $nameonly.'_'.$nama.'.'.$extension;
        $request->file('nama_file')->move("referensi/", $fileName);

        $ebook->nama_file = $fileName;
        $ebook->nama = $request->input('nama');
        $ebook->status = 'Tidak Tampil';

        $ebook->save();

        return redirect('ebookadmin');
    }

    // warta
    public function warta()
    {
        return view('superadmin.warta.index');
    }

    public function createwarta()
    {
        return view('superadmin.warta.create');
    }

    public function storewarta(Request $request)
    {
        
    }

    // regulasi
    public function regulasi()
    {
        $regulasi = Regulasi::orderBy('id', 'desc')->get();
        return view('superadmin.regulasi.index', compact('regulasi'));
    }

    public function createregulasi()
    {
        return view('superadmin.regulasi.create');
    }

    public function storeregulasi(Request $request)
    {
        $superadmin=Auth::User()->superadmin;

        $regulasi = new Regulasi();

        $regulasi->superadmin_id = $superadmin->id;
        // $pengantarkota->jabatan = $request->input ('nama_surat');
        // $pengantarkota->nama = $request->input ('nama_surat');
        $nama = Auth::User()->username;
        $file  = $request->file('nama_file');
        $nameonly=preg_replace('/\..+$/', '', $file->getClientOriginalName());
        $extension = $file->getClientOriginalExtension();
        $fileName   = $nameonly.'_'.$nama.'.'.$extension;
        $request->file('nama_file')->move("referensi/", $fileName);

        $regulasi->nama_file = $fileName;
        $regulasi->nama = $request->input('nama');
        $regulasi->status = 'Tidak Tampil';

        $regulasi->save();

        return redirect('regulasiadmin');
    }

    // materi
    public function materi()
    {
        $materi = Materi::orderBy('id', 'desc')->get();
        return view('superadmin.materi.index', compact('materi'));
    }

    public function createmateri()
    {
        return view('superadmin.materi.create');
    }

    public function storemateri(Request $request)
    {
        $superadmin=Auth::User()->superadmin;

        $materi = new Materi();

        $materi->superadmin_id = $superadmin->id;
        // $pengantarkota->jabatan = $request->input ('nama_surat');
        // $pengantarkota->nama = $request->input ('nama_surat');
        $nama = Auth::User()->username;
        $file  = $request->file('nama_file');
        $nameonly=preg_replace('/\..+$/', '', $file->getClientOriginalName());
        $extension = $file->getClientOriginalExtension();
        $fileName   = $nameonly.'_'.$nama.'.'.$extension;
        $request->file('nama_file')->move("referensi/", $fileName);

        $materi->nama_file = $fileName;
        $materi->nama = $request->input('nama');
        $materi->status = 'Tidak Tampil';

        $materi->save();

        return redirect('regulasiadmin');
    }

    // agenda
    public function agenda()
    {
        return view('superadmin.agenda.index');
    }

    public function createagenda()
    {
        return view('superadmin.agenda.create');
    }

    public function storeagenda(Request $request)
    {
        
    }

    // user
    public function user()
    {
        // $user=User::where('role','!=','superadmin')->get();

        $user = User::orderBy('id', 'desc')->get();

        // $user = User::all()->sortBy('role');
        return view('superadmin.user.index',compact('user'));
    }

    public function createuser()
    {
        // $user = 
        return view('superadmin.user.create');
    }

    public function storeuser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'unique:users',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors('Username Tidak Boleh Kosong / Sama')->withInput();
        }
            $role = $request->input('role');
            if ($role == 'superadmin'){
                $user = User::create($request->all());
                $user->username=$request->input('username');
                $user->password=bcrypt($user->password);
                $user->role=$request->input('role');
                $user->email=$request->input('email');
                $user->save();
                
                $admin = new Superadmin();

                $admin->user_id = $user->id;

                $admin->nama = $request->input('nama');


                $admin->save();
             
       
                return redirect('user')->with('success','Tersimpan');
            }
            elseif ($role == 'admin'){ 
                $user = User::create($request->all());
                $user->username=$request->input('kabupaten');
                $user->password=bcrypt($user->password);
                $user->role=$request->input('role');
                $user->email=$request->input('email');
                $user->save();
                
                $admin = new Admin();
                $admin->superadmin_id = Auth::user()->id;
                $admin->user_id = $user->id;
                $admin->nama = $request->input('nama');
               

                $admin->save();
        
       
                return redirect('user')->with('success','Tersimpan');
            }
            elseif ($role == 'dinasprov'){ 
                $user = User::create($request->all());
                $user->username=$request->input('opd');
                $user->password=bcrypt($user->password);
                $user->role=$request->input('role');
                $user->email=$request->input('email');
                $user->save();
                
                $opd = new Dinasprov();


                $opd->user_id = $user->id;
                $opd->superadmin_id = Auth::user()->id;
                $opd->nama = $request->input('nama');
               

                $opd->save();
        
       
                return redirect('user')->with('success','Tersimpan');
            }

            return redirect('createuser');
    }

    // ideinovasi
    public function ideinovasi()
    {
        return view('superadmin.ideinovasi.index');
    }

    public function createideinovasi()
    {
        return view('superadmin.ideinovasi.create');
    }

    public function storeideinovasi()
    {
        
    }

    // kontakkami
    public function kontakkami()
    {
        return view('superadmin.kontakkami.index');
    }

    public function createkontakkami()
    {
        return view('superadmin.kontakkami.create');
    }

    public function storekontakkami()
    {
        
    }

    //inovasi
    public function inovasi()
    {
        return view('superadmin.inovasi.index');
    }

    public function createinovasi()
    {
        return view('superadmin.inovasi.create');
    }

    public function storeinovasi()
    {
        
    }

    //gantipassword
    public function gantipassword()
    {
        return view('superadmin.password');
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
