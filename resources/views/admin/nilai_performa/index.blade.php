@extends('layouts.app')

@section('title','Nilai Performa')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
        </div>

        

        <div class="section-body">

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
                                <th>Total Nilai</th>
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