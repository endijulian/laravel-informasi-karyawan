<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('admin.data_karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Tambah karyawan';
        
        return view('admin.data_karyawan.create', $data);
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

        $karyawan = new Karyawan();
        $karyawan->nik =$request->nik;
        $karyawan->name =$request->name;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->alamat = $request->alamat;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->save();
        return redirect('karyawan')->with('success', 'Tambah Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
     
        $data['item'] = $karyawan;
        return view('admin.data_karyawan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
        ]);

      
        $karyawan->nik =$request->nik;
        $karyawan->name =$request->name;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->alamat = $request->alamat;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->save();
        return redirect('karyawan')->with('success', 'Tambah Data Berhasil');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect('karyawan')->with('success', 'Hapus Data Berhasil');
    }
}
