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

    public function view($id){
        $data = User::find($id);

        return view('user.euser',compact('data'));
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

    public function dpuser($id){
        $user = User::find($id);
        $data = Perjalanan::where('user_id',$user->id)->get();
        return view('user.dpuser', compact('data'));
    }

    public function dpdestroy($id){
        $data = Perjalanan::find($id);
        $data->delete();
        return back();
    }

    public function dpupdate(Request $request, $id){
        $data = Perjalanan::find($id);
        $data->update($request->all());
        
    }

    public function dpview($id){
        $data = Perjalanan::find($id);
        return view('user.edpuser',compact('data'));
    }
}
