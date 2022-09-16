@extends('layouts.app')

@section('title','Edit user')

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

                <form action="{{ route('user.update', $item->id) }}" method="POST">
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
                        <label for="title">email</label>
                        <input type="text" class="form-control"
                            name="email" value="{{ old('email', $item->email) }}" />
                    </div>
                    <div class="form-group">
                        <label for="title">Role User</label>
                        <select name="role_user" class="form-control" id="">
                            <option value="1" {{$item->role_user == 1 ? 'selected' : ''}}>Admin</option>
                            <option value="2" {{$item->role_user == 2 ? 'selected' : ''}}>Leader</option>
                            <option value="3" {{$item->role_user == 3 ? 'selected' : ''}}>Karyawan</option>
                        </select>
                    </div>
                 
                    <div class="form-group">
                        <label for="title">satus</label>
                        <select name="status" class="form-control" id="">
                            <option value="1" {{$item->status == 1 ? 'selected' : ''}}>Aktif</option>
                            <option value="2" {{$item->status == 2 ? 'selected' : ''}}>Tidak Aktif</option>
                        </select>
                    </div>
                 
                  
                 
                    <button type="submit" class="btn btn-md btn-primary">Save</button>
                    <a href="{{ route('user.index') }}" class="btn btn-md btn-secondary">back</a>
        </form>        
    </div>    
</div>    
@endsection