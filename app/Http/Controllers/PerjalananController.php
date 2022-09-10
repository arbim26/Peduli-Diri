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
        $tampilkan_data = Auth::user()->data()->paginate(10);
        // $jumlah_data = count($tampilkan_data['data']);
        return view('perjalanan.perjalanan', compact('tampilkan_data'));
    }

    

    public function create(Request $request){
        // dd($request);
        Perjalanan::create($request->all());
        return redirect(route('perjalanan'))->with('message','Sending infomation successfully');
    }

    // public function index()
    // {

    // }
    
}
