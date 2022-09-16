<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penilaian;

class NilaiPerformaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penilaian = Penilaian::all();
        return view('admin.nilai_performa.index', compact('penilaian'));
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

    public function terbaik(Request $request){

        return view('admin.karyawan_terbaik.index');
    }

    public function terbaikFilter(Request $request){

        $penilaian = Penilaian::whereBetween('periode', [$request->periode_start, $request->periode_end])
            ->selectRaw('*, sum(total) as total_nilai')
            ->groupBy('karyawan_id')
            ->orderBy('total_nilai', 'desc')->paginate(5);

        return view('admin.karyawan_terbaik.filter', compact('penilaian'));
        // return $penilaian;
    }

    public function terendah(){
        return view('admin.karyawan_terendah.index');
    }

    public function terendahFilter(Request $request){
        // dd($request->all());
        // $penilaian = Penilaian::where('periode', $request->periode)->orderBy("total", "asc")->paginate(5);
        $penilaian = Penilaian::whereBetween('periode', [$request->periode_start, $request->periode_end])
            ->selectRaw('*, sum(total) as total_nilai')
            ->groupBy('karyawan_id')
            ->orderBy('total_nilai', 'asc')->paginate(5);


        return view('admin.karyawan_terendah.filter', compact('penilaian'));
    }

    public function nilai(){
        return view('admin.nilai_akhir.index');
    }

    public function nilaiFilter(Request $request){

        // $ddkd = $this->getData($request);

        $awal = $request->awal;
        $akhir = $request->akhir;

       $get_data =  Penilaian::whereBetween('periode', [$awal, $akhir])
            ->selectRaw('*, sum(total) as total_nilai')
          ->groupBy('karyawan_id')->orderBy('total_nilai', 'desc')->get();

        return view('admin.nilai_akhir.filter', compact('get_data'));
    }
}
