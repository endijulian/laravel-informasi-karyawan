@extends('layouts.app')

@section('title', 'Data Laporan')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
        </div>
        <div class="section-body">

        <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('karyawan.terbaik.filter') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Periode Start<span class="text-danger">*</span></label>
                                        <input type="month" class="form-control" name="periode_start" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="">Periode End<span class="text-danger">*</span></label>
                                        <input type="month" class="form-control" name="periode_end" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Cari</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <!-- <div class="col-md-6">
                            <form action="{{ route('karyawan.terbaik.filter') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Periode</label>
                                    <input type="month" class="form-control" name="periode">
                                </div>
                                <button type="submit" class="btn btn-success">Cari</button>
                            </form>
                        </div> -->
                        <div class="col-md-12" style="overflow-x: auto;">
                            <h2>Karyawan Terbaik</h2>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Karyawan</th>
                                        <th>tanggal_penilaian
                                        <th>
                                        <th>periode
                                        <th>
                                        <th>absensi
                                        <th>
                                        <th>pemahaman
                                        <th>
                                        <th>pencapaian
                                        <th>
                                        <th>kebersihan_lingkungan
                                        <th>
                                        <th>kerapihan
                                        <th>
                                        <th>perilaku
                                        <th>
                                        <th>Total Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penilaian as $no => $item)
                                        <tr>
                                            <th>{{ $no + 1 }}</th>
                                            <th>{{ $item->karyawan->name }}</th>
                                            <th>{{ $item->tanggal_penilaian }}
                                            <th>
                                            <th>{{ $item->periode }}
                                            <th>
                                            <th>{{ $item->absensi }}
                                            <th>
                                            <th>{{ $item->pemahaman }}
                                            <th>
                                            <th>{{ $item->pencapaian }}
                                            <th>
                                            <th>{{ $item->kebersihan_lingkungan }}
                                            <th>
                                            <th>{{ $item->kerapihan }}
                                            <th>
                                            <th>{{ $item->perilaku }}
                                            <th>
                                            <th>{{ $item->total_nilai }}</th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
