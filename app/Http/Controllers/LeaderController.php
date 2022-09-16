<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Leader = Leader::all();
        return view('admin.data_Leader.index', compact('Leader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Tambah Leader';
        
        return view('admin.data_Leader.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
        ]);

        $Leader = new Leader();
        $Leader->nik =$request->nik;
        $Leader->name =$request->name;
        $Leader->jenis_kelamin = $request->jenis_kelamin;
        $Leader->alamat = $request->alamat;
        $Leader->jabatan = $request->jabatan;
        $Leader->save();
        return redirect('Leader')->with('success', 'Tambah Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leader  $Leader
     * @return \Illuminate\Http\Response
     */
    public function show(Leader $Leader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leader  $Leader
     * @return \Illuminate\Http\Response
     */
    public function edit(Leader $Leader)
    {
     
        $data['item'] = $Leader;
        return view('admin.data_Leader.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leader  $Leader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leader $Leader)
    {
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
        ]);

      
        $Leader->nik =$request->nik;
        $Leader->name =$request->name;
        $Leader->jenis_kelamin = $request->jenis_kelamin;
        $Leader->alamat = $request->alamat;
        $Leader->jabatan = $request->jabatan;
        $Leader->save();
        return redirect('Leader')->with('success', 'Tambah Data Berhasil');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leader  $Leader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leader $Leader)
    {
        $Leader->delete();
        return redirect('Leader')->with('success', 'Hapus Data Berhasil');
    }
}
