@extends('layouts.app')

@section('title','input user')

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

                <form action="{{ route('karyawan.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="title">nik</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror"
                            name="nik" value="{{ old('nik') }}" required>
                            

                        <!-- error message untuk title -->
                        @error('nik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required>
                            

                        <!-- error message untuk title -->
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">jenis kelamin</label>
                        <input type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror"
                            name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" required>
                            

                        <!-- error message untuk title -->
                        @error('jenis_kelamin')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                            name="alamat" value="{{ old('alamat') }}" required>
                            

                        <!-- error message untuk title -->
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">jabatan</label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror"
                            name="jabatan" value="{{ old('jabatan') }}" required>
                            

                        <!-- error message untuk title -->
                        @error('jabatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    
                   
                            

                     

</div>
                    <button type="submit" class="btn btn-md btn-primary">Save</button>
                    <a href="{{ route('user.index') }}" class="btn btn-md btn-secondary">back</a>
        </form>        
    </div>    
</div>    
@endsection