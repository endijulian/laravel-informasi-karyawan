@extends('layouts.app')

@section('title','Edit karyawan')

@section('content')
<div class="card">
    <div class="card-body">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <div class="card border-0 shadow rounded">
            <div class="card-body">

                <form action="{{ route('karyawan.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">nik</label>
                        <input type="text" class="form-control"
                            name="nik" value="{{ old('nik', $item->nik) }}" />
                    </div>
                    <div class="form-group">
                        <label for="title">name</label>
                        <input type="text" class="form-control"
                            name="name" value="{{ old('name', $item->name) }}" />
                    </div>
                    <div class="form-group">
                        <label for="title">jenis_kelamin</label>
                        <input type="text" class="form-control"
                            name="jenis_kelamin" value="{{ old('jenis_kelamin', $item->jenis_kelamin) }}" />
                    </div>
                    <div class="form-group">
                        <label for="title">alamat</label>
                        <input type="text" class="form-control"
                            name="alamat" value="{{ old('alamat', $item->alamat) }}" />
                    </div>
                    <div class="form-group">
                        <label for="title">jabatan</label>
                        <input type="text" class="form-control"
                            name="jabatan" value="{{ old('jabatan', $item->jabatan) }}" />
                    </div>
                   

                    <button type="submit" class="btn btn-md btn-primary">Save</button>
                    <a href="{{ route('karyawan.index') }}" class="btn btn-md btn-secondary">back</a>
        </form>        
    </div>    
</div>    
@endsection