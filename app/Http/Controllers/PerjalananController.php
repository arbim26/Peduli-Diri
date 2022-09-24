<?php

namespace App\Http\Controllers;

use App\Models\Perjalanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class PerjalananController extends Controller
{
    public function dashboard()
    {
        $user = User::find(Auth::user()->id);
        return view('index',['user' => $user,]);;
    }

    public function tambah()
    {
        $user = User::find(Auth::user()->id);
        return view('tambah.tambah',['user' => $user,]);;
    }


    public function perjalanan()
    { 
        $user = User::find(Auth::user()->id);
        $data = perjalanan::where('user_id', $user->id)->paginate(10);
        return view('perjalanan.perjalanan',['user' => $user], compact('data'));
    }

    public function create(Request $request)
    {
        $user = Auth::user();
        perjalanan::create([
            'user_id' =>$user->id,
            'tanggal' =>$request->tanggal,
            'waktu' =>$request->waktu,
            'lokasi' =>$request->lokasi,
            'suhu' =>$request->suhu,
        ]);
        return redirect()->route('perjalanan');
    }

}
