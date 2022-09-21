<?php

namespace App\Http\Controllers;

use App\Models\Perjalanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class PerjalananController extends Controller
{
    public function perjalanan()
    { 
        $user = User::find(Auth::user()->id);
        // dd($user);
        $data = perjalanan::where('user_id', $user->id)->get();
        return view('perjalanan.perjalanan', compact('data'));
    }

    public function create(Request $request)
    {
        // $this->validate($request, [
        //         'tanggal' => 'required',
        //         'waktu'=> 'required',
        //         'lokasi'=> 'required',
        //         'suhu'=> 'required',
        //     ]);
        // $user = User::find(Auth::user());
        $user = Auth::user();
        // dd($user);
        perjalanan::create([
            'user_id' =>$user->id,
            'tanggal' =>$request->tanggal,
            'waktu' =>$request->waktu,
            'lokasi' =>$request->lokasi,
            'suhu' =>$request->suhu,
        ]);
        return redirect()->route('perjalanan');
    }


    // public function create(Request $request){
    //     // dd($request);
    //     Perjalanan::create($request->all());
    //     return redirect(route('perjalanan'))->with('message','Sending infomation successfully');
    // }

}
