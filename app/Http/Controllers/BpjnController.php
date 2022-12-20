<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BpjnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function lokasi()
    {
        return view('BPJN.lokasi');
    }
    public function lokasi2()
    {
        return view('BPJN.lokasi_2');
    }

    public function kontak()
    {
        return view('BPJN.kontak');
    }
    public function kontak2()
    {
        return view('BPJN.kontak_2');
    }

    public function tugas()
    {
        return view('BPJN.tugas');
    }
    public function tugas2()
    {
        return view('BPJN.tugas_2');
    }

    public function informasi()
    {
        return view('BPJN.info');
    }

    public function organisasi()
    {
        return view('BPJN.organisasi');
    }
    public function organisasi2()
    {
        return view('BPJN.organisasi_2');
    }

}
