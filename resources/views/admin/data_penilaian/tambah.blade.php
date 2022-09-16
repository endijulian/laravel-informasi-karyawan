@extends('layouts.app')

@section('title','Data Penilaian')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body"> 
                <!-- @if (session('penilaian'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                {{ session('penilaian') }}
                            </div>
                        </div>
                    @endif -->
                    <form action="{{ route('penilaian.tambah') }}" method="post">
                        @method('PUT')
                        @csrf
                        
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Absensi</label>
                            <select name="penilaian" id="" class="form-control">
                                <option value="">-- Pilihan --</option>
                                <option value="10%">10%</option>
                                <option value="25%">25%</option>
                                <option value="50%">50%</option>
                                <option value="75%">75%</option>
                                <option value="100%">100%</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Pemahanam dalam bekerja</label>
                            <select name="penilaian" id="" class="form-control">
                                    <option value="">-- Pilihan --</option>
                                    <option value="10%">10%</option>
                                    <option value="25%">25%</option>
                                    <option value="50%">50%</option>
                                    <option value="75%">75%</option>
                                    <option value="100%">100%</option>
                                </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                    <div class="col-md-6">
                            <label for="">Pencapaian produksi</label>
                            <select name="penilaian" id="" class="form-control">
                                    <option value="">-- Pilihan --</option>
                                    <option value="10%">10%</option>
                                    <option value="25%">25%</option>
                                    <option value="50%">50%</option>
                                    <option value="75%">75%</option>
                                    <option value="100%">100%</option>
                                </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="">Kebersihan Lingkungan</label>
                            <select name="kebersihan_lingkungan" id="" class="form-control">
                                    <option value="">-- Pilihan --</option>
                                    <option value="10%">10%</option>
                                    <option value="25%">25%</option>
                                    <option value="50%">50%</option>
                                    <option value="75%">75%</option>
                                    <option value="100%">100%</option>
                                </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Kerapihan</label>
                            <select name="kerapihan" id="" class="form-control">
                                    <option value="">-- Pilihan --</option>
                                    <option value="10%">10%</option>
                                    <option value="25%">25%</option>
                                    <option value="50%">50%</option>
                                    <option value="75%">75%</option>
                                    <option value="100%">100%</option>
                                </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Perilaku</label>
                            <select name="perilaku" id="" class="form-control">
                                    <option value="">-- Pilihan --</option>
                                    <option value="10%">10%</option>
                                    <option value="25%">25%</option>
                                    <option value="50%">50%</option>
                                    <option value="75%">75%</option>
                                    <option value="100%">100%</option>
                                </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection