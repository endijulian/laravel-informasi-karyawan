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

                <form action="{{ route('user.store') }}" method="POST">
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
                        <label for="title">email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required>
                            

                        <!-- error message untuk title -->
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" value="{{ old('password') }}" required>
                            

                        <!-- error message untuk title -->
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <label for="status">Role User</label>
                        <h6>1 = Admin</h6>
                        <h6>2 = karyawan</h6>
                        <h6>3 = leader</h6>
                        <h6>4 = Kepala Bagian</h6>
                        <select name="status" class="form-control" required>
                            <option value="4" selected>--Pilih Role User--</option>
                            <option value="3">1</option>
                            <option value="2">2</option>
                            <option value="1">3</option>
                            <option value="0">4</option>
                        </select>
                    </div> --}}
                    <div class="form-group">
                        <label>Role User <span class="text-danger">*</span></label>
                        <select class="form-control" name="role_user">
                        @foreach($role_user as $key => $val)
                        @if($key==old('role_user'))
                        <option value="{{ $key }}" selected>{{ $val }}</option>
                        @else
                        <option value="{{ $key }}">{{ $val }}</option>
                        @endif
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status <span class="text-danger">*</span></label>
                        <select class="form-control" name="status">
                        @foreach($status as $key => $val)
                        @if($key==old('status'))
                        <option value="{{ $key }}" selected>{{ $val }}</option>
                        @else
                        <option value="{{ $key }}">{{ $val }}</option>
                        @endif
                        @endforeach
                        </select>
                    </div>

                    {{-- <div class="form-group">
                        <label for="status">Status</label>
                        <h6>1 = Aktif</h6>
                        <h6>2 = Tidak Aktif</h6>
                        <select name="status" class="form-control" required>
                            <option value="2" selected>--Pilih Status--</option>
                            <option value="1">1</option>
                            <option value="0">2</option>
                        </select>
                    </div> --}}
            
                    <button type="submit" class="btn btn-md btn-primary">Save</button>
                    <a href="{{ route('user.index') }}" class="btn btn-md btn-secondary">back</a>
        </form>        
    </div>    
</div>    
@endsection