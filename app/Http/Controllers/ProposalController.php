<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Proposal;

use App\Penghargaan;

use App\Penerapan;

use App\Admin;

use App\Inovator;

use Auth;

use Validaor;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inovator.sinovikfull');
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
        $proposal = Proposal::where('id', $id)->first();
        $proposal->judul=$request->input('judul');
        $proposal->tanggal=$request->input('tanggal');
        $proposal->kategori=$request->input('kategori');
        $proposal->ringkasan=$request->input('ringkasan');
        $proposal->pendekatan=$request->input('pendekatan');
        $proposal->analisis=$request->input('analisis');
        $proposal->kreatif_inovatif=$request->input('kreatif');
        $proposal->pelaksanaan=$request->input('pelaksanaan');
        $proposal->rencana=$request->input('rencana');
        $proposal->sumberdaya=$request->input('sumber');
        $proposal->keluaran=$request->input('keluaran');
        $proposal->pemantauan=$request->input('pemantauan');
        $proposal->kendala=$request->input('kendala');
        $proposal->manfaat=$request->input('manfaat');
        $proposal->sebelum_sesudah=$request->input('perbedaan');
        $proposal->keselarasan=$request->input('keselarasan');
        $proposal->pembelajaran=$request->input('pembelajaran');
        $proposal->referensi=$request->input('referensi');
        $proposal->kelanjutan=$request->input('kelanjutan');
        $proposal->update();

        return redirect('inovatorproposal');
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
