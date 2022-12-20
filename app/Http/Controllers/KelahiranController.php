<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelahiran;
use Illuminate\Support\Facades\Response;
use PDF;

class KelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = auth()->user();
        $lahir = kelahiran::all();
        $lahir_count = kelahiran::all()->count();
        return view('BPJN.kelahiran', compact ('users', 'lahir', 'lahir_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = auth()->user();
        $lahir = kelahiran::all();
        return view('BPJN.kelahiran', compact ('users', 'lahir'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lahir = new kelahiran;
        $lahir->id_kelahiran = $request->id_kelahiran;
        $lahir->nama_anak = $request->nama_anak;
        $lahir->tgl_lhr = $request->tgl_lhr;
        $lahir->jk = $request->jk;
        $lahir->alamat = $request->alamat;
        $lahir->nama_ayah = $request->nama_ayah;
        $lahir->nama_ibu = $request->nama_ibu;
        $lahir->anakke = $request->anakke;
        
        $lahir->save();
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
        $lahir = kelahiran::all();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kelahiran)
    {
        $lahir = kelahiran::where('id_kelahiran', $id_realisasi)->first();
        $lahir->id_kelahiran = $request->id_kelahiran;
        $lahir->nama_anak = $request->nama_anak;
        $lahir->tgl_lhr = $request->tgl_lhr;
        $lahir->jk = $request->jk;
        $lahir->alamat = $request->alamat;
        $lahir->nama_ayah = $request->nama_ayah;
        $lahir->nama_ibu = $request->nama_ibu;
        $lahir->anakke = $request->anakke;
        
        $lahir->save();
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
        $delete = kelahiran::where('id_kelahiran', $id_realisasi)->first();
        $delete->save();
        return redirect()->back();
    }

    
    //Print File
    public function print()
    {
        $lahir = kelahiran::all();
        $pdf = PDF::loadview('BPJN.print_born', compact('lahir'));
        return $pdf->stream();
    }
    public function dokumen()
    {
        $users = auth()->user();
        $lahir = kelahiran::all();
        return view('BPJN.dokumen', compact ('users', 'lahir'));
    }
}
