<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
// use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
        
            $users = User::all();
            $user = User::count();
            return view('admin.data_user.index', compact('users','user'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search_user(Request $request)
    {
        $keyword = $request->search;
        $users = User::where('nama_lengkap', 'like', "%" . $keyword . "%")->paginate(5);
        return view('admin.data_user.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        $data['title'] = 'Tambah User';
        $data['role_user'] = ['1' => 'admin', '2' => 'karyawan', '3' => 'leader',];
        $data['status'] = ['1' => 'aktif', '2' => 'tidak aktif'];
        return view('admin.data_user.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_user' => 'required',
            'status' => 'required',
        ]);

        $user = new User();
        $user->nik =$request->nik;
        $user->name =$request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_user = $request->role_user;
        $user->status = $request->status;
        $user->save();
        return redirect('user')->with('success', 'Tambah Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data['title'] = 'Ubah User';
        $data['item'] = $user;
        $data['role_user'] = ['1' => 'admin', '2' => 'karyawan', '3' => 'leader',];
        $data['status'] = ['1' => 'aktif', '2' => 'tidak aktif'];
        return view('admin.data_user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'email' => 'required',
            // 'password' => 'required',
            'role_user' => 'required',
            'status' => 'required',
        ]);

        $user->nik =$request->nik;
        $user->name = $request->name;
        $user->email = $request->email;
        // if ($request->password)
        //     $user->password = Hash::make($request->password);
        $user->role_user = $request->role_user;
        $user->status = $request->status;
        $user->save();
        return redirect('user')->with('user', 'Edit Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('user')->with('success', 'Hapus Data Berhasil');
    }
}
