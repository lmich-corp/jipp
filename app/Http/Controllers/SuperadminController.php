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
        return view('superadmin.ebook.index');
    }

    public function createebook()
    {
        return view('superadmin.ebook.create');
    }

    public function storeebook()
    {
        
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

    public function storewarta()
    {
        
    }

    // regulasi
    public function regulasi()
    {
        return view('superadmin.regulasi.index');
    }

    public function createregulasi()
    {
        return view('superadmin.regulasi.create');
    }

    public function storeregulasi()
    {
        
    }

    // materi
    public function materi()
    {
        return view('superadmin.materi.index');
    }

    public function createmateri()
    {
        return view('superadmin.materi.create');
    }

    public function storemateri()
    {
        
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

    public function storeagenda()
    {
        
    }

    // user
    public function user()
    {
        return view('superadmin.user.index');
    }

    public function createuser()
    {
        return view('superadmin.user.create');
    }

    public function storeuser(Request $request)
    {
        
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
