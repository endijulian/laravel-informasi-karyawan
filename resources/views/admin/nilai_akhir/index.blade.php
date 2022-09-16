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
                            <form action="{{ route('nilai.akhir.filter') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Periode Awal</label>
                                        <input type="month" class="form-control" name="awal">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Periode Akhir</label>
                                        <input type="month" class="form-control" name="akhir">
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
