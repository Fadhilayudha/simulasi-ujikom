<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = User::all();  
        return view("admin.siswa", compact('siswas'));
    }

    public function destroy($id)
    {
        $siswas = User::where("id", "=", $id);
        $siswas->delete();
        return redirect()->route('admin.siswa')->with('successAdd', 'Berhasil menghapus data peserta!');
    }
}
