<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kematian;
use Illuminate\Support\Facades\Response;
use PDF;

class KematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = auth()->user();
        $mati = kematian::all();
        $lahir_count = kematian::all()->count();
        return view('BPJN.kematian', compact ('users', 'mati', 'lahir_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = auth()->user();
        $mati = kematian::all();
        return view('BPJN.kematian', compact ('users', 'mati'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mati = new kematian;
        $mati->id= $request->id;
        $mati->nama = $request->nama;
        $mati->nik = $request->nik;
        $mati->jk = $request->jk;
        $mati->tempat_tgl_lahir = $request->tempat_tgl_lahir;
        $mati->agama = $request->agama;
        $mati->hari = $request->hari;
        $mati->tgl = $request->tgl;
        $mati->bertempat = $request->bertempat;
        $mati->penyebab = $request->penyebab;
        $mati->nama_pelapor = $request->nama_pelapor;
        $mati->nik_pelapor = $request->nik_pelapor;
        $mati->hari = $request->hari;
        $mati->tempat_tgl_lahir_pelapor = $request->tempat_tgl_lahir_pelapor;
        $mati->pekerjaan = $request->pekerjaan;
        $mati->save();
        return redirect()->back();
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
        $users = auth()->user();
        $mati = kematian::all();
        return redirect()->back();
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
        $mati = kematian::where('id', $id)->first();
        $mati->id= $request->id;
        $mati->nama = $request->nama;
        $mati->nik = $request->nik;
        $mati->jk = $request->jk;
        $mati->tempat_tgl_lahir = $request->tempat_tgl_lahir;
        $mati->agama = $request->agama;
        $mati->hari = $request->hari;
        $mati->tgl = $request->tgl;
        $mati->bertempat = $request->bertempat;
        $mati->penyebab = $request->penyebab;
        $mati->nama_pelapor = $request->nama_pelapor;
        $mati->nik_pelapor = $request->nik_pelapor;
        $mati->hari = $request->hari;
        $mati->tempat_tgl_lahir_pelapor = $request->tempat_tgl_lahir_pelapor;
        $mati->pekerjaan = $request->pekerjaan;

        $mati->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = kematian::where('id', $id)->first();
        $delete->save();
        return redirect()->back();
    }

    public function dokumen()
    {
        $users = auth()->user();
        $mati = kematian::all();
        return view('BPJN.dokumen', compact ('users', 'mati'));
    }
    
    public function print()
    {
        $lahir = kelahiran::all();
        $pdf = PDF::loadview('BPJN.print_born', compact('lahir'));
        return $pdf->stream();
    }
}
