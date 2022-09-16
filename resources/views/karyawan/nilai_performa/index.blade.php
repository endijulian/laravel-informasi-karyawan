@extends('layouts.app')

@section('title','Nilai Performa')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
        </div>

        <div class="section-body">

        <!-- <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="#" method="post">
                            @csrf
                           <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="">Periode Start<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="periode_start" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Periode End<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="periode_end" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Kategori Nilai<span class="text-danger">*</span></label>
                                    <select class="form-control" name="kategori_nilai" required>
                                        <option value="1">Nilai Terbaik</option>
                                        <option value="2">Nilai Terendah</option>
                                    </select>
                                </div>
                           </div>
                            <button type="submit" class="btn btn-success float-right">Filter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

            <div class="card">
                <div class="card-body">
                    <div style="overflow-x:auto;">
                    <table class="table" id="MyTable">
                        <thead>
                            <tr>
                                <th>Karyawan</th>
                                <th>tanggal_penilaian<th>
                                <th>periode<th>
                                <th>absensi<th>
                                <th>pemahaman<th>
                                <th>pencapaian<th>
                                <th>kebersihan_lingkungan<th>
                                <th>kerapihan<th>
                                <th>perilaku<th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penilaian as $item)
                            <tr>
                                <th>{{$item->karyawan->name}}</th>
                                <th>{{ $item->tanggal_penilaian}}<th>
                                <th>{{ $item->periode}}<th>
                                <th>{{$item->absensi}}<th>
                                <th>{{$item->pemahaman}}<th>
                                <th>{{$item->pencapaian}}<th>
                                <th>{{$item->kebersihan_lingkungan}}<th>
                                <th>{{$item->kerapihan}}<th>
                                <th>{{$item->perilaku}}<th>
                                <th>{{ $item->total }}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection