<?php

namespace App\Http\Controllers;

use App\Models\ReferensiDetail;
use App\Models\School;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegistrasiController extends Controller
{
    public function index()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'nisn' => 'required|min:10|max:10',
            'jenis_kelamin' => 'required',
            'nama' => 'required',
            'sekolah' => 'required',
            'email'=> 'required|email|unique:users',
            'jurusan' => 'required',
        ]);

        // $password = now()->format('Ymd').$no_seleksi;

        $user = User::create([
            'nama' => $request->nama,
            'nisn' => $request->nisn,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
            'sekolah' => $request->sekolah,
            'password' => $request->nisn,
            'role' => 'student'
        ]);

        return redirect()->route('auth.login')->with('success','Berhasil registrasi!');
    }
    
    public function update(Request $request, $id)
    {
        // dd($request->all());

        $request->validate([
            'nisn' => 'required|min:10|max:10',
            'jenis_kelamin' => 'required',
            'nama' => 'required',
            'sekolah' => 'required',
            'email'=> 'required|email|unique:users',
            'jurusan' => 'required',
        ]);

        // $password = now()->format('Ymd').$no_seleksi;

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->nisn = $request->nisn;
        $user->email = $request->email;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->role = $request->role;
        $user->save();

        return redirect()->route('auth.login')->with('success','Berhasil registrasi!');
    }

}
