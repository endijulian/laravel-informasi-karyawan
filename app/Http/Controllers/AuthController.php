<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{


public function index(){
        return view('auth.login');
    }


public function login(Request $request){
        $request->validate([
        'email' => 'required',
        'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if($user){
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                if($user->status == 1){
                    if($user->role_user == 1){
                        return view('admin.dashboard');
                        }elseif($user-> role_user == 2){
                            return view('karyawan.dashboard');
                    }elseif($user->role_user == 3){
                        return view('leader.dashboard');
                    
                    }
                }
                else{
                    return redirect()->back()->with('login','Akun Tidak Aktif');
                }
                
             }
                else{
                    return redirect()->back()->with('login', 'Password Salah');
                }
            }
            else{
                return redirect()->back()->with('login', 'Username Tidak Terdaftar');
        }
        
    }
public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect()->route('login')->with('login', 'berhasil logout');

    }
}
