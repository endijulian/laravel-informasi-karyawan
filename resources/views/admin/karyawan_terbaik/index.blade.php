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
                                <!-- <div class="form-group">
                                    <label for="">Periode</label>
                                    <input type="month" class="form-control" name="periode">
                                </div> -->
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Periode Start<span class="text-danger">*</span></label>
                                        <input type="month" class="form-control" name="periode_start" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="">Periode End</label>
                                        <input type="month" class="form-control" name="periode_end">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Cari</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
