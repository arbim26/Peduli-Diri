<?php

namespace App\Http\Controllers;

use App\Models\Perjalanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function duser(){
        $data = User::all();
        return view('user.duser',compact('data'));
    }

    public function update(Request $request, $id){
        $data = User::find($id);
        $data->update($request->all());
        return redirect('duser');
    }

    public function destroy($id){
        $data = User::find($id);
        $data->delete();
        return redirect('duser');
    }
}
