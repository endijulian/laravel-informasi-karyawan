@extends('layouts.app')

@section('title', 'Data User')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah
                        Data</a><br><br>
                        
                    
                    <hr>
                    @if (session('user'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>{{ session('user') }}</strong>
                        </div>
                    @endif
                    <table class="table table-bordered table-striped" id="MyTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nik</th>
                                <th>name</th>
                                <th>email</th>
                                <th>Role User</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($users))
                                @foreach ($users as $no => $item)
                                    <tr>
                                        <td>{{ $no + 1 }}</td>
                                        <td>{{ $item->nik}}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            @if($item->role_user == 1)
                                                <small class="badge badge-primary">Admin</small>
                                            
                                            @elseif($item->role_user == 2)
                                                <small class="badge badge-info">Leader</small>
                                            
                                                @elseif($item->role_user == 3)
                                                <small class="badge badge-warning">Karyawan</small>
                                            
                                        
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->status == 1)
                                                <small class="badge badge-success">Aktif</small>
                                            @else
                                                <small class="badge badge-danger">Tidak Aktif</small>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('user.destroy', $item->id) }} " method="POST">
                            
                                              
                            
                                                <a class="btn btn-info btn-sm" href="{{ route('user.edit', $item->id) }}"><i
                                                    class="fas fa-edit"></i></a>
                            
                                                @csrf
                                                @method('DELETE')
                            
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                    <i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                        {{-- <th>
                                            <a href="{{ route('user.edit', $item->id_user) }}" class="btn btn-sm btn-info"><i
                                                    class="fas fa-edit"></i></a>

                                            <form action="{{ route('user.destroy', $item->id_user) }} " method="post"
                                                onclick="return confirm('Yakin ingin dihapus?')">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                         </th> --}}
                                    </tr>
                                @endforeach 
                            @endif 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection