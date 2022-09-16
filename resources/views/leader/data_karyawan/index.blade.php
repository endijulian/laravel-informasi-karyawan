@extends('layouts.app')

@section('title','Data Karyawan')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                <table class="table table-bordered table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nik</th>
                                <th>name</th>
                                <th>jenis kelamin</th>
                                <th>alamat</th>
                                <th>jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($leader))
                                @foreach ($leader as $no => $item)
                                    <tr>
                                        <td>{{ $no + 1 }}</td>
                                        <td>{{ $item->nik}}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->jenis_kelamin }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->jabatan }}</td>
                                  
                                        <td class="text-center">
                                            <form action="{{ route('leader.destroy', $item->id) }} " method="POST">
                            
                                              
                            
                                                <a class="btn btn-info btn-sm" href="{{ route('leader.edit', $item->id) }}"><i
                                                    class="fas fa-edit"></i></a>
                            
                                                @csrf
                                                @method('DELETE')
                            
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                    <i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                       
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